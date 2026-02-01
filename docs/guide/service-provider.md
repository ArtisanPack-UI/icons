---
title: Service Provider Integration
---

# Service Provider Integration

The ArtisanPack UI Icons v2.0 package includes a `IconsServiceProvider` that handles configuration publishing, icon set registration, and integration with the `blade-ui-kit/blade-icons` system.

## Automatic Registration

The service provider is automatically registered through Laravel's package auto-discovery feature. You don't need to manually register it unless you've disabled auto-discovery.

## Manual Registration

If you need to manually register the service provider (rare), add it to your `config/app.php` file:

```php
'providers' => [
    // ...
    ArtisanPackUI\Icons\IconsServiceProvider::class,
],
```

## Service Provider Architecture

The v2.0 service provider is fundamentally different from v1.x. Instead of registering hardcoded icon arrays, it acts as an adapter that integrates custom icon sets with `blade-ui-kit/blade-icons`.

### Key Components

1. **Configuration Management** - Publishes and merges configuration
2. **Hybrid Registration System** - Combines config-based and event-driven registration
3. **BladeIcons Integration** - Registers icon sets with the BladeIcons factory
4. **Event System** - Supports third-party package integration

## Configuration Management

### Configuration Publishing

The service provider publishes the configuration file during the `boot()` phase:

```php
public function boot()
{
    $this->publishes([
        __DIR__ . '/../config/icons.php' => config_path('artisanpack/icons.php'),
    ], 'artisanpack-package-config');
}
```

### Configuration Merging

During the `register()` phase, the service provider merges the package configuration:

```php
public function register()
{
    $this->mergeConfigFrom(
        __DIR__ . '/../config/icons.php',
        'custom-icons'
    );
}
```

This allows the package to work with default settings even if the config file hasn't been published.

## Hybrid Registration System

The core feature of the v2.0 service provider is the hybrid registration system that combines two registration methods:

### 1. Config-Based Registration

Icon sets defined in `config/artisanpack/icons.php`:

```php
// config/artisanpack/icons.php
return [
    'sets' => [
        'fa' => [
            'path'   => resource_path('icons/fontawesome'),
            'prefix' => 'fa'
        ],
+       'custom' => [
            'path'   => resource_path('icons/custom'),
            'prefix' => 'custom'
        ],
    ],
];
```

### 2. Event-Driven Registration

Icon sets registered by third-party packages via the `ap.icons.register-icon-sets` filter hook:

```php
// In a package service provider
addFilter('ap.icons.register-icon-sets', function ($sets) {
    $sets[] = new IconSetRegistration(
        path: __DIR__ . '/../../resources/icons',
        prefix: 'mypackage'
    );
    return $sets;
});
```

### Registration Process

The service provider combines both registration methods:

```php
protected function registerIconSets()
{
    $this->app->callAfterResolving(\BladeUI\Icons\Factory::class, function (\BladeUI\Icons\Factory $factory) {
        // 1. Get config-based icon sets
        $configSets = config('artisanpack.icons.sets', []);
        
        // 2. Get event-driven icon sets
        $eventSets = apply_filters('ap.icons.register-icon-sets', []);
        
        // 3. Merge sets (config takes precedence)
        $allSets = array_merge($eventSets, $configSets);
        
        // 4. Register each set with BladeIcons
        foreach ($allSets as $prefix => $set) {
+            $factory->add($prefix, ['path' => $set['path'], 'prefix' => $prefix] + $set);
         }
    });
}
```

## BladeIcons Integration

The service provider integrates with `blade-ui-kit/blade-icons` to provide the underlying icon rendering system.

### Deferred Registration

Icon registration is deferred until after the `BladeCompiler` is resolved to ensure proper initialization order:

```php
$this->app->callAfterResolving(BladeCompiler::class, function () {
    $this->registerIcons();
});
```

### Icon Set Format

Each icon set is registered with the BladeIcons factory using this structure:

```php
\app(\BladeUI\Icons\Factory::class)->add('prefix', [
    'path' => '/absolute/path/to/icons',
    'prefix' => 'prefix',
]);
```

This creates Blade components like:
- `<x-icon-prefix-home />` 
- `<x-icon-prefix-user />`
- `<x-icon-prefix-settings />`

## Error Handling

The service provider includes comprehensive error handling:

### Path Validation

```php
foreach ($allSets as $set) {
    if (!isset($set['path']) || !isset($set['prefix'])) {
        \Log::warning('Invalid icon set configuration', $set);
        continue;
    }
    
    if (!is_dir($set['path'])) {
        \Log::warning("Icon set directory not found: {$set['path']}");
        continue;
    }
    
    BladeIcons::add($set['prefix'], $set);
}
```

### Conflict Resolution

When the same prefix is registered multiple times, config-based registrations take precedence over event-driven ones:

```php
// Event-driven sets are merged first, then config sets override
$allSets = array_merge($eventSets, $configSets);
```

## Integration with Third-Party Packages

The service provider enables seamless integration with third-party packages through the event system.

### Package Registration Example

```php
// In MyPackageServiceProvider
public function boot()
{
    addFilter('ap.icons.register-icon-sets', function ($sets) {
        if ($this->shouldProvideIcons()) {
            $sets[] = [
                'path' => __DIR__ . '/../../resources/icons',
                'prefix' => 'mypackage',
            ];
        }
        return $sets;
    });
}

private function shouldProvideIcons(): bool
{
    return config('mypackage.provide_icons', true);
}
```

## Performance Considerations

### Lazy Loading

Icon registration is lazy-loaded and only occurs when:
1. The BladeCompiler is resolved
2. The first icon component is rendered

### Caching

The service provider leverages Laravel's configuration caching:
- `php artisan config:cache` will cache the merged configuration
- Event-driven registrations occur on each request (minimal overhead)

### Memory Efficiency

Unlike v1.x, the v2.0 service provider:
- Doesn't load icon data into memory
- Only registers metadata with BladeIcons
- Allows blade-ui-kit to handle SVG loading on-demand

## Debugging

### Debug Mode

Enable debugging in local development:

```php
// In a service provider or AppServiceProvider
if (app()->environment('local')) {
    addFilter('ap.icons.register-icon-sets', function ($sets) {
        \Log::debug('Custom Icons: Event-driven sets', ['count' => count($sets)]);
        return $sets;
    });
}
```

### Configuration Debugging

Check the merged configuration:

```php
// In tinker or a controller
dd(config('artisanpack.icons'));

// Check individual sets
collect(config('artisanpack.icons.sets'))->each(function ($set) {
    dump("Prefix: {$set['prefix']}, Path: {$set['path']}, Exists: " . (is_dir($set['path']) ? 'Yes' : 'No'));
});
```

## Differences from v1.x

| Feature | v1.x | v2.0 |
|---------|------|------|
| **Service Registration** | Icons singleton | Configuration only |
| **Asset Serving** | Built-in routes | Delegated to blade-ui-kit |
| **Blade Directives** | `@apIcons` | None (uses blade-ui-kit) |
| **Memory Usage** | High (hardcoded arrays) | Minimal (metadata only) |
| **Icon Loading** | Preloaded | On-demand |
| **Extensibility** | Limited | Event-driven system |

## See Also

- [Installation Guide](Installation) - Setup and configuration
- [Extension API](Extension-Api) - Third-party package integration
- [Architecture Overview](Architecture) - System design and patterns
- [Usage Examples](Usage-Examples) - Practical implementation examples