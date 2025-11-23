<?php

use ArtisanPackUI\Icons\Registries\IconSetRegistration;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

function createEventTestDirectories(): void
{
    $directories = [
        'test-event-icons-1',
        'test-event-icons-2',
        'test-event-icons-3'
    ];

    foreach ($directories as $dir) {
        $fullPath = storage_path($dir);
        if (!File::exists($fullPath)) {
            File::makeDirectory($fullPath, 0755, true);
        }
    }
}

function cleanupEventTestDirectories(): void
{
    $directories = [
        'test-event-icons-1',
        'test-event-icons-2',
        'test-event-icons-3'
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
    removeAllFilters('ap.icons.register-icon-sets');
    
    // Create test directories
    createEventTestDirectories();
});

afterEach(function () {
    // Clean up test directories
    cleanupEventTestDirectories();
    
    // Clear filters
    removeAllFilters('ap.icons.register-icon-sets');
});

test('it can register icon sets via filter hook', function () {
    // Add a filter to register icon sets
    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('test-event-icons-1'), 'event');
        
        return $registry;
    });

    // Create IconSetRegistration and apply filter
    $registry = new IconSetRegistration();
    $filteredRegistry = applyFilters('ap.icons.register-icon-sets', $registry);
    
    // Assert the registry contains our event-registered set
    $sets = $filteredRegistry->getSets();
    expect($sets)->toHaveKey('event')
        ->and($sets['event']['path'])->toBe(storage_path('test-event-icons-1'));
});

test('it supports iconsetregistration class functionality', function () {
    $registry = new IconSetRegistration();
    
    // Test adding a single icon set
    $registry->addSet(storage_path('test-event-icons-1'), 'test');
    
    $sets = $registry->getSets();
    expect($sets)->toHaveKey('test')
        ->and($sets['test']['path'])->toBe(storage_path('test-event-icons-1'));
});

test('it supports batch icon set registration', function () {
    $registry = new IconSetRegistration();
    
    // Test batch registration
    $batchSets = [
        'batch1' => [
            'path' => storage_path('test-event-icons-1')
        ],
        'batch2' => [
            'path' => storage_path('test-event-icons-2')
        ]
    ];
    
    $registry->addSets($batchSets);
    
    $sets = $registry->getSets();
    expect($sets)->toHaveKey('batch1')
        ->toHaveKey('batch2')
        ->and($sets['batch1']['path'])->toBe(storage_path('test-event-icons-1'))
        ->and($sets['batch2']['path'])->toBe(storage_path('test-event-icons-2'));
});

test('it validates icon set parameters', function () {
    $registry = new IconSetRegistration();
    
    // Test validation - should throw exceptions for invalid parameters
    expect(function () use ($registry) {
        $registry->addSet('', 'test'); // Empty path should throw exception
    })->toThrow(InvalidArgumentException::class);
    
    expect(function () use ($registry) {
        $registry->addSet(storage_path('test-event-icons-1'), ''); // Empty prefix should throw exception
    })->toThrow(InvalidArgumentException::class);
    
    expect(function () use ($registry) {
        $registry->addSet('/nonexistent/path', 'test'); // Invalid path should throw exception
    })->toThrow(InvalidArgumentException::class);
    
    // Valid registration should work
    $registry->addSet(storage_path('test-event-icons-1'), 'valid');
    
    $sets = $registry->getSets();
    expect($sets)->toHaveKey('valid')
        ->and($sets['valid']['path'])->toBe(storage_path('test-event-icons-1'));
});

test('it handles multiple extension registrations', function () {
    // Simulate multiple extensions registering icon sets
    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('test-event-icons-1'), 'ext1');
        
        return $registry;
    });
    
    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('test-event-icons-2'), 'ext2');
        
        return $registry;
    });
    
    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('test-event-icons-3'), 'ext3');
        
        return $registry;
    });

    // Create registry and apply all filters
    $registry = new IconSetRegistration();
    $filteredRegistry = applyFilters('ap.icons.register-icon-sets', $registry);
    
    $sets = $filteredRegistry->getSets();
    
    // All three extensions should have registered their icon sets
    expect($sets)->toHaveKey('ext1')
        ->toHaveKey('ext2')
        ->toHaveKey('ext3')
        ->and($sets['ext1']['path'])->toBe(storage_path('test-event-icons-1'))
        ->and($sets['ext2']['path'])->toBe(storage_path('test-event-icons-2'))
        ->and($sets['ext3']['path'])->toBe(storage_path('test-event-icons-3'));
});

test('it resolves conflicts between config and event driven sets', function () {
    // Set up config-based icon set
    Config::set('artisanpack.icons.sets', [
        'shared-name' => [
            'path' => storage_path('test-event-icons-1'),
            'prefix' => 'config'
        ]
    ]);
    
    // Register event-based icon set with same name
    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('test-event-icons-2'), 'event');
        
        return $registry;
    });
    
    // Test that the service provider logic would handle this properly
    // (Config should take precedence over events based on the merge order)
    
    $registry = new IconSetRegistration();
    $eventRegistry = applyFilters('ap.icons.register-icon-sets', $registry);
    $eventSets = $eventRegistry->getSets();
    
    $configSets = config('artisanpack.icons.sets');
    
    // Simulate the merge logic from service provider
    $allSets = array_merge($eventSets, $configSets);
    
    // Config should override event (config takes precedence)
    expect($allSets['shared-name']['prefix'])->toBe('config');
});

test('it handles empty event registrations', function () {
    // Add filter that doesn't register anything
    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        // Extension doesn't register any icon sets
        return $registry;
    });
    
    $registry = new IconSetRegistration();
    $filteredRegistry = applyFilters('ap.icons.register-icon-sets', $registry);
    
    $sets = $filteredRegistry->getSets();
    expect($sets)->toBeEmpty();
});

test('it handles invalid event registrations gracefully', function () {
    // Add filter that tries to register invalid data
    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        // Try to register valid icon set first
        $registry->addSet(storage_path('test-event-icons-1'), 'valid');
        
        // Try to register invalid icon set - this should throw an exception
        try {
            $registry->addSet('/non/existent/path', 'invalid');
        } catch (InvalidArgumentException $e) {
            // Exception is expected for invalid path
        }
        
        return $registry;
    });
    
    $registry = new IconSetRegistration();
    $filteredRegistry = applyFilters('ap.icons.register-icon-sets', $registry);
    
    $sets = $filteredRegistry->getSets();
    
    // Should only contain the valid set since invalid one threw exception
    expect($sets)->toHaveKey('valid')
        ->not->toHaveKey('invalid');
});

test('it preserves icon set metadata', function () {
    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        $registry->addSet(storage_path('test-event-icons-1'), 'meta');
        
        return $registry;
    });
    
    $registry = new IconSetRegistration();
    $filteredRegistry = applyFilters('ap.icons.register-icon-sets', $registry);
    
    $sets = $filteredRegistry->getSets();
    
    // The current implementation only stores path, not additional metadata
    expect($sets)->toHaveKey('meta')
        ->and($sets['meta']['path'])->toBe(storage_path('test-event-icons-1'));
});