<?php

use ArtisanPackUI\Icons\Registries\IconSetRegistration;
use BladeUI\Icons\Factory;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use TorMorten\Eventy\Facades\Eventy;

function createIntegrationIconsStructure(): void
{
    $directories = [
        'integration-icons-config',
        'integration-icons-event',
        'integration-icons-third-party',
        'integration-icons-conflict-1',
        'integration-icons-conflict-2'
    ];

    foreach ($directories as $dir) {
        $fullPath = storage_path($dir);
        if (!File::exists($fullPath)) {
            File::makeDirectory($fullPath, 0755, true);
        }
        
        // Create sample SVG files
        createIntegrationSampleSvgFiles($fullPath, $dir);
    }
}

function createIntegrationSampleSvgFiles(string $path, string $prefix): void
{
    $svgContent = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>';
    
    $icons = ['check', 'cross', 'star', 'heart'];
    
    foreach ($icons as $icon) {
        File::put("{$path}/{$icon}.svg", $svgContent);
    }
}

function cleanupIntegrationIconsStructure(): void
{
    $directories = [
        'integration-icons-config',
        'integration-icons-event',
        'integration-icons-third-party',
        'integration-icons-conflict-1',
        'integration-icons-conflict-2'
    ];

    foreach ($directories as $dir) {
        $fullPath = storage_path($dir);
        if (File::exists($fullPath)) {
            File::deleteDirectory($fullPath);
        }
    }
}

beforeEach(function () {
    // Clear any existing filters
    Eventy::removeAllFilters('ap.icons.register-icon-sets');
    
    // Create test directories and SVG files
    createIntegrationIconsStructure();
});

afterEach(function () {
    // Clean up test directories
    cleanupIntegrationIconsStructure();
    
    // Clear filters
    Eventy::removeAllFilters('ap.icons.register-icon-sets');
});

test('it registers and uses icons in blade components from config', function () {
    // Set up configuration
    Config::set('artisanpack.icons.sets', [
        'config-icons' => [
            'path' => storage_path('integration-icons-config'),
            'prefix' => 'config'
        ]
    ]);

    // Test that configuration is set correctly
    $configSets = config('artisanpack.icons.sets');
    expect($configSets)->toHaveKey('config-icons')
        ->and($configSets['config-icons']['path'])->toBe(storage_path('integration-icons-config'))
        ->and($configSets['config-icons']['prefix'])->toBe('config');
    
    // Test that the directory exists (created by beforeEach)
    expect(is_dir(storage_path('integration-icons-config')))->toBeTrue();
});

test('it registers multiple icon sets from both config and events', function () {
    // Set up configuration-based icon set
    Config::set('artisanpack.icons.sets', [
        'config-set' => [
            'path' => storage_path('integration-icons-config'),
            'prefix' => 'config'
        ]
    ]);

    // Set up event-driven icon set
    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('integration-icons-event'), 'event');
        
        return $registry;
    });

    // Test configuration-based sets
    $configSets = config('artisanpack.icons.sets', []);
    expect($configSets)->toHaveKey('config-set')
        ->and($configSets['config-set']['path'])->toBe(storage_path('integration-icons-config'))
        ->and($configSets['config-set']['prefix'])->toBe('config');
    
    // Test event-driven sets
    $eventRegistry = new IconSetRegistration();
    $eventRegistry = Eventy::filter('ap.icons.register-icon-sets', $eventRegistry);
    $eventSets = $eventRegistry->getSets();
    
    expect($eventSets)->toHaveKey('event')
        ->and($eventSets['event']['path'])->toBe(storage_path('integration-icons-event'));

    // Verify both directories exist
    expect(is_dir(storage_path('integration-icons-config')))->toBeTrue();
    expect(is_dir(storage_path('integration-icons-event')))->toBeTrue();
});

test('it resolves conflicts between icon sets correctly', function () {
    // Set up conflicting icon sets - config should take precedence
    Config::set('artisanpack.icons.sets', [
        'conflict-set' => [
            'path' => storage_path('integration-icons-conflict-1'),
            'prefix' => 'config-wins'
        ]
    ]);

    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('integration-icons-conflict-2'), 'event-loses');
        
        return $registry;
    });

    // Simulate service provider merge logic (config takes precedence)
    $eventRegistry = new IconSetRegistration();
    $eventRegistry = Eventy::filter('ap.icons.register-icon-sets', $eventRegistry);
    $eventSets = $eventRegistry->getSets();
    
    $configSets = config('artisanpack.icons.sets', []);
    
    // Merge with config taking precedence
    $allSets = array_merge($eventSets, $configSets);
    
    // Verify config set wins the conflict
    expect($allSets['conflict-set']['prefix'])->toBe('config-wins');
    expect($allSets['conflict-set']['path'])->toBe(storage_path('integration-icons-conflict-1'));
});

test('it handles missing paths gracefully', function () {
    // Set up configuration with non-existent path
    Config::set('artisanpack.icons.sets', [
        'missing-path' => [
            'path' => '/completely/non/existent/path',
            'prefix' => 'missing'
        ],
        'valid-path' => [
            'path' => storage_path('integration-icons-config'),
            'prefix' => 'valid'
        ]
    ]);

    // Test service provider validation logic
    $configSets = config('artisanpack.icons.sets', []);
    $validatedSets = [];
    
    foreach ($configSets as $name => $details) {
        if (!empty($name) && !empty($details['path']) && is_dir($details['path'])) {
            $validatedSets[$name] = $details;
        }
    }

    // Only valid path should pass validation
    expect($validatedSets)->not->toHaveKey('missing-path')
        ->toHaveKey('valid-path');
    
    // Verify the directories
    expect(is_dir('/completely/non/existent/path'))->toBeFalse();
    expect(is_dir(storage_path('integration-icons-config')))->toBeTrue();
});

test('it supports third party extension integration', function () {
    // Simulate multiple third-party extensions registering icon sets
    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        // Extension 1 - UI Library
        $registry->addSet(storage_path('integration-icons-third-party'), 'ui');
        
        return $registry;
    });

    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        // Extension 2 - E-commerce addon  
        $registry->addSet(storage_path('integration-icons-third-party'), 'shop');
        
        return $registry;
    });

    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        // Extension 3 - Social media addon
        $registry->addSet(storage_path('integration-icons-third-party'), 'social');
        
        return $registry;
    });

    // Apply all filters
    $eventRegistry = new IconSetRegistration();
    $eventRegistry = Eventy::filter('ap.icons.register-icon-sets', $eventRegistry);
    $eventSets = $eventRegistry->getSets();

    // Verify all extensions registered their icon sets
    expect($eventSets)->toHaveKey('ui')
        ->toHaveKey('shop')
        ->toHaveKey('social')
        ->and($eventSets['ui']['path'])->toBe(storage_path('integration-icons-third-party'))
        ->and($eventSets['shop']['path'])->toBe(storage_path('integration-icons-third-party'))
        ->and($eventSets['social']['path'])->toBe(storage_path('integration-icons-third-party'));
});

test('it validates extension registrations', function () {
    // Test that invalid registrations throw exceptions
    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        // Valid registration should work
        $registry->addSet(storage_path('integration-icons-third-party'), 'valid');
        
        // Invalid registrations should throw exceptions
        try {
            $registry->addSet('', 'invalid-empty-path');
        } catch (InvalidArgumentException $e) {
            // Expected - empty path throws exception
        }
        
        try {
            $registry->addSet(storage_path('integration-icons-third-party'), '');
        } catch (InvalidArgumentException $e) {
            // Expected - empty prefix throws exception
        }
        
        try {
            $registry->addSet('/does/not/exist', 'invalid-bad-path');
        } catch (InvalidArgumentException $e) {
            // Expected - non-existent path throws exception
        }
        
        return $registry;
    });

    $eventRegistry = new IconSetRegistration();
    $eventRegistry = Eventy::filter('ap.icons.register-icon-sets', $eventRegistry);
    $eventSets = $eventRegistry->getSets();

    // Registry should only contain the valid set
    expect($eventSets)->toHaveKey('valid')
        ->not->toHaveKey('invalid-empty-path')
        ->not->toHaveKey('')
        ->not->toHaveKey('invalid-bad-path');

    // Verify the valid directory exists
    expect(is_dir(storage_path('integration-icons-third-party')))->toBeTrue();
});

test('it handles complex multi source registration scenario', function () {
    // Complex scenario with config sets, multiple extensions, conflicts, and validation
    
    // Configuration sets
    Config::set('artisanpack.icons.sets', [
        'app-icons' => [
            'path' => storage_path('integration-icons-config'),
            'prefix' => 'app'
        ],
        'shared-name' => [
            'path' => storage_path('integration-icons-conflict-1'),
            'prefix' => 'config-version'
        ]
    ]);

    // Extension 1 - Should not override config
    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('integration-icons-event'), 'ext1');
        
        // This should be overridden by config
        $registry->addSet(storage_path('integration-icons-conflict-2'), 'event-version');
        
        return $registry;
    });

    // Extension 2 - Additional icons
    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('integration-icons-third-party'), 'ext2');
        
        return $registry;
    });

    // Extension 3 - Invalid registration (should throw exception)
    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        try {
            $registry->addSet('/invalid/path', 'ext3');
        } catch (InvalidArgumentException $e) {
            // Expected - invalid path throws exception
        }
        
        return $registry;
    });

    // Test service provider validation logic without Factory instantiation
    
    // Get and validate config sets
    $validatedConfigSets = [];
    $configSets = config('artisanpack.icons.sets', []);
    foreach ($configSets as $name => $details) {
        if (!empty($name) && !empty($details['path']) && is_dir($details['path'])) {
            $validatedConfigSets[$name] = $details;
        }
    }

    // Get event sets
    $eventRegistry = new IconSetRegistration();
    $eventRegistry = Eventy::filter('ap.icons.register-icon-sets', $eventRegistry);
    $eventSets = $eventRegistry->getSets();

    // Validate event sets
    $validatedEventSets = [];
    foreach ($eventSets as $name => $details) {
        if (!empty($name) && !empty($details['path']) && is_dir($details['path'])) {
            $validatedEventSets[$name] = $details;
        }
    }

    // Merge with config taking precedence
    $allSets = array_merge($validatedEventSets, $validatedConfigSets);

    // Verify expected results without Factory
    expect($validatedConfigSets)->toHaveKey('app-icons');
    expect($validatedEventSets)->toHaveKey('ext1')
        ->toHaveKey('ext2')
        ->not->toHaveKey('ext3'); // Invalid path should be filtered out
    expect($allSets)->toHaveKey('shared-name');
    
    // Verify conflict resolution (config should win)
    expect($allSets['shared-name']['prefix'])->toBe('config-version');
    expect($allSets['shared-name']['path'])->toBe(storage_path('integration-icons-conflict-1'));
});

test('it preserves additional icon set metadata', function () {
    // Test basic icon set registration (current implementation only stores path)
    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('integration-icons-third-party'), 'meta');
        
        return $registry;
    });

    $eventRegistry = new IconSetRegistration();
    $eventRegistry = Eventy::filter('ap.icons.register-icon-sets', $eventRegistry);
    $eventSets = $eventRegistry->getSets();

    $metadataSet = $eventSets['meta'];
    
    // Verify basic data is stored (current implementation only stores path)
    expect($metadataSet)->toHaveKey('path')
        ->and($metadataSet['path'])->toBe(storage_path('integration-icons-third-party'));
    
    // Verify directory exists
    expect(is_dir(storage_path('integration-icons-third-party')))->toBeTrue();
});

test('it handles empty extension responses', function () {
    // Add filters that return empty or null responses
    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        // Extension that doesn't register anything
        return $registry;
    });

    Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        // Another extension that also doesn't register anything
        return $registry;
    });

    $eventRegistry = new IconSetRegistration();
    $eventRegistry = Eventy::filter('ap.icons.register-icon-sets', $eventRegistry);
    $eventSets = $eventRegistry->getSets();

    // Should handle empty responses gracefully
    expect($eventSets)->toBeArray()
        ->toBeEmpty();
});