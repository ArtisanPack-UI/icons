---
title: Extension API Documentation
---

# Extension API Documentation

This guide is designed for third-party package developers who want to integrate with ArtisanPack UI Icons and register their own icon sets programmatically. The Extension API allows packages to register icon sets via event hooks without requiring users to manually configure them.

## Overview

The ArtisanPack UI Icons package provides a dual registration system:
1. **Config-based registration** - Users configure icon sets in `config/artisanpack/icons.php`
2. **Event-driven registration** - Packages register icon sets programmatically via filter hooks

The event-driven system is perfect for packages that want to bundle their own icon sets and register them automatically when installed.

## The `ap.icons.register-icon-sets` Filter Hook

The primary extension point is the `ap.icons.register-icon-sets` filter hook. This hook allows packages to register icon sets that will be merged with user-configured sets.

### Basic Usage

```php
use ArtisanPackUI\Icons\Registries\IconSetRegistration;

// In your package's service provider boot() method
addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
    $registry->addSet(__DIR__ . '/../../resources/icons', 'mypackage');
    return $registry;
});

```

### Hook Parameters

The filter hook receives an `IconSetRegistration` registry instance and must return it after adding your icon sets via the `addSet()` or `addSets()` methods.

## IconSetRegistration Class

The `IconSetRegistration` class provides a structured way to define icon sets for event-driven registration.

### Constructor

```php
public function __construct(
    public string $path,
    public string $prefix,
    public ?string $disk = null
)
```

#### Parameters

- **`$path`** (string, required): Absolute path to the directory containing SVG files
- **`$prefix`** (string, required): Unique prefix for the icon set (e.g., 'mypackage', 'admin')  
- **`$disk`** (string, optional): Laravel filesystem disk name (defaults to local filesystem)

### Usage Examples

#### Basic Registration

```php
use ArtisanPackUI\Icons\Registries\IconSetRegistration;

$iconSet = new IconSetRegistration(
    path: __DIR__ . '/../resources/icons',
    prefix: 'admin'
);
```

#### With Custom Disk

```php
$iconSet = new IconSetRegistration(
    path: 'icons/custom',
    prefix: 'cloud',
    disk: 's3'
);
```

## Implementation Patterns

### Single Icon Set Registration

For packages that provide one icon set:

```php
<?php

namespace MyPackage\Providers;

use Illuminate\Support\ServiceProvider;
use ArtisanPackUI\Icons\Registries\IconSetRegistration;

class MyPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register your package's icon set
        addFilter('ap.icons.register-icon-sets', function ($sets) {
            $sets[] = new IconSetRegistration(
                path: __DIR__ . '/../../resources/icons',
                prefix: 'mypackage'
            );
            
            return $sets;
        });
    }
}
```

### Multiple Icon Sets Registration

For packages that provide multiple themed icon sets:

```php
public function boot()
{
    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
        // Register multiple themed icon sets
        $iconSets = [
            'admin' => __DIR__ . '/../../resources/icons/admin',
            'user' => __DIR__ . '/../../resources/icons/user',
            'sys' => __DIR__ . '/../../resources/icons/system',

        ];
        
        foreach ($iconSets as $prefix => $path) {
            $registry->addSet($path, $prefix);
         }
        
        return $registry;
    });
}
```

### Conditional Registration

Register icon sets based on configuration or environment:

```php
public function boot()
{
    addFilter('ap.icons.register-icon-sets', function ($sets) {
        // Only register if the package is configured to provide icons
        if (config('mypackage.provide_icons', true)) {
            $sets[] = new IconSetRegistration(
                path: __DIR__ . '/../../resources/icons',
                prefix: 'mypackage'
            );
        }
        
        // Register additional sets based on features
        if (config('mypackage.admin_icons', false)) {
            $sets[] = new IconSetRegistration(
                path: __DIR__ . '/../../resources/icons/admin',
                prefix: 'myadmin'
            );
        }
        
        return $sets;
    });
}
```

### Dynamic Path Resolution

Handle different installation contexts:

```php
public function boot()
{
    addFilter('ap.icons.register-icon-sets', function ($sets) {
        // Resolve path based on package installation location
        $iconPath = $this->resolveIconPath();
        
        if ($iconPath && is_dir($iconPath)) {
            $sets[] = new IconSetRegistration(
                path: $iconPath,
                prefix: 'dynamic'
            );
        }
        
        return $sets;
    });
}

private function resolveIconPath(): ?string
{
    // Try multiple possible locations
    $possiblePaths = [
        __DIR__ . '/../../resources/icons',
        resource_path('vendor/mypackage/icons'),
        storage_path('app/mypackage/icons'),
    ];
    
    foreach ($possiblePaths as $path) {
        if (is_dir($path)) {
            return $path;
        }
    }
    
    return null;
}
```

## Advanced Usage

### Validation and Error Handling

```php
public function boot()
{
    addFilter('ap.icons.register-icon-sets', function ($sets) {
        try {
            $iconPath = __DIR__ . '/../../resources/icons';
            
            // Validate path exists and is readable
            if (!is_dir($iconPath) || !is_readable($iconPath)) {
                \Log::warning("MyPackage icons directory not found or not readable: {$iconPath}");
                return $sets;
            }
            
            // Check for SVG files
            $svgFiles = glob($iconPath . '/*.svg');
            if (empty($svgFiles)) {
                \Log::info("MyPackage icons directory contains no SVG files: {$iconPath}");
                return $sets;
            }
            
            $sets[] = new IconSetRegistration(
                path: $iconPath,
                prefix: 'mypackage'
            );
            
            \Log::info("MyPackage registered " . count($svgFiles) . " icons with prefix 'mypackage'");
            
        } catch (\Exception $e) {
            \Log::error("Failed to register MyPackage icons: " . $e->getMessage());
        }
        
        return $sets;
    });
}
```

### Priority and Ordering

If registration order matters, you can use priority parameters:

```php
// Register with high priority (early registration)
addFilter('ap.icons.register-icon-sets', function ($sets) {
    // Critical system icons registered first
    array_unshift($sets, new IconSetRegistration(
        path: __DIR__ . '/../../resources/icons/critical',
        prefix: 'critical'
    ));
    
    return $sets;
}, 5); // Lower number = higher priority

// Register with normal priority
addFilter('ap.icons.register-icon-sets', function ($sets) {
    $sets[] = new IconSetRegistration(
        path: __DIR__ . '/../../resources/icons',
        prefix: 'mypackage'
    );
    
    return $sets;
}, 10); // Default priority
```

## Conflict Resolution

The system handles conflicts between different registration sources with the following precedence:

1. **Config-based registrations** (highest priority)
2. **Event-driven registrations** (by registration order)

### Avoiding Conflicts

#### Choose Unique Prefixes

```php
// Good - unique and descriptive
$sets[] = new IconSetRegistration(
    path: __DIR__ . '/../../resources/icons',
    prefix: 'mycompany-admin'
);

// Avoid - too generic
$sets[] = new IconSetRegistration(
    path: __DIR__ . '/../../resources/icons',
    prefix: 'admin' // Could conflict with other packages
);
```

#### Check for Existing Prefixes

```php
addFilter('ap.icons.register-icon-sets', function ($sets) {
    // Check if our preferred prefix is already in use
    $existingPrefixes = array_column($sets, 'prefix');
    
    $prefix = 'mypackage';
    if (in_array($prefix, $existingPrefixes)) {
        $prefix = 'mypackage-alt'; // Use fallback prefix
        \Log::warning("MyPackage icon prefix conflict detected, using fallback: {$prefix}");
    }
    
    $sets[] = new IconSetRegistration(
        path: __DIR__ . '/../../resources/icons',
        prefix: $prefix
    );
    
    return $sets;
});
```

## Package Publishing Best Practices

### Directory Structure

Organize your package's icons for easy maintenance:

```
packages/mypackage/
├── resources/
│   └── icons/
│       ├── actions/
│       │   ├── save.svg
│       │   └── cancel.svg
│       ├── navigation/
│       │   ├── home.svg
│       │   └── back.svg
│       └── status/
│           ├── success.svg
│           └── error.svg
└── src/
    └── MyPackageServiceProvider.php
```

### Icon Naming Conventions

Follow consistent naming for better developer experience:

- Use kebab-case: `user-profile.svg`, `arrow-left.svg`
- Be descriptive: `trash-can.svg` instead of `delete.svg`
- Group logically: `nav-home.svg`, `nav-settings.svg`

### Documentation

Document your icon set in your package's README:

```markdown
## Icons

This package automatically registers icon components with the `mypackage` prefix:

- `<x-icon-mypackage-save />` - Save action icon
- `<x-icon-mypackage-cancel />` - Cancel action icon
- `<x-icon-mypackage-home />` - Home navigation icon

### Disabling Icons

To disable automatic icon registration:

```php
// config/mypackage.php
return [
    'provide_icons' => false,
];
```

### Usage Examples

The complete usage examples with proper prefixes and styling classes are available in your package documentation.

## Testing Extension Integration

### Unit Tests

Test your icon registration logic:

```php
<?php

namespace Tests\Unit;

use Tests\TestCase;
use ArtisanPackUI\Icons\Registries\IconSetRegistration;

class IconRegistrationTest extends TestCase
{
    public function test_package_registers_icon_set()
    {
        // Simulate the filter hook
        $sets = [];
        $sets = apply_filters('ap.icons.register-icon-sets', $sets);
        
        // Assert your package's icon set is registered
        $prefixes = array_column($sets, 'prefix');
        $this->assertContains('mypackage', $prefixes);
        
        // Find your package's registration
        $myPackageSet = collect($sets)->first(fn($set) => $set->prefix === 'mypackage');
        $this->assertNotNull($myPackageSet);
        $this->assertInstanceOf(IconSetRegistration::class, $myPackageSet);
    }
    
    public function test_icon_files_exist()
    {
        $iconPath = __DIR__ . '/../../resources/icons';
        $this->assertDirectoryExists($iconPath);
        
        $svgFiles = glob($iconPath . '/*.svg');
        $this->assertNotEmpty($svgFiles, 'No SVG files found in icon directory');
    }
}
```

### Integration Tests

Test that icons render correctly:

```php
public function test_package_icons_render_in_blade()
{
    // Assuming you have a test icon file
    $iconPath = __DIR__ . '/../../resources/icons/test.svg';
    file_put_contents($iconPath, '<svg><circle r="10"/></svg>');
    
    $view = $this->blade('<x-icon-mypackage-test />');
    
    $this->assertStringContains('<svg', $view);
    $this->assertStringContains('<circle r="10"/>', $view);
    
    unlink($iconPath); // Cleanup
}
```

## Troubleshooting for Extension Developers

### Common Issues

#### Icons Not Appearing

1. **Check registration timing**: Ensure your filter hook runs before the icons are processed
2. **Verify paths**: Use absolute paths and ensure directories exist
3. **Check prefixes**: Ensure your prefix doesn't conflict with existing ones

#### Performance Issues

1. **Lazy validation**: Don't perform expensive operations in the filter hook
2. **Cache paths**: Store resolved paths to avoid repeated filesystem checks

#### Memory Issues

1. **Don't load SVG content** in the registration phase - let blade-ui-kit handle loading
2. **Use generators** for large icon sets if needed

### Debug Output

Add debugging to your registration:

```php
addFilter('ap.icons.register-icon-sets', function ($sets) {
    if (app()->environment('local')) {
        \Log::debug('MyPackage registering icons', [
            'path' => __DIR__ . '/../../resources/icons',
            'prefix' => 'mypackage',
            'existing_sets_count' => count($sets)
        ]);
    }
    
    $sets[] = new IconSetRegistration(
        path: __DIR__ . '/../../resources/icons',
        prefix: 'mypackage'
    );
    
    return $sets;
});
```

## Next Steps

- Review [Architecture Overview](architecture.md) to understand the complete system
- Check [Usage Examples](usage-examples.md) for implementation patterns
- See [Migration Guide](migration.md) for upgrading considerations
- Learn about [Service Provider](service-provider.md) integration details