---
title: Installation Guide
---

# Installation Guide

This guide will walk you through installing and setting up the ArtisanPack UI Icons package in your Laravel application. This package serves as an extensibility layer for custom icon sets using `blade-ui-kit/blade-icons`.

## Requirements

- PHP 8.2 or higher
- Laravel 12.0 or higher
- `blade-ui-kit/blade-icons` ^1.8
- Composer

## Step 1: Install via Composer

Install the package via Composer:

```bash
composer require artisanpack-ui/icons
```

The package uses Laravel's auto-discovery feature, so the service provider will be automatically registered.

## Step 2: Publish Configuration

Publish the configuration file to customize your icon sets:

```bash
php artisan vendor:publish --tag=custom-icons-config
```

This creates `config/custom-icons.php` where you can register your icon sets.

## Step 3: Configure Your Icon Sets

Edit `config/custom-icons.php` to register your icon sets:

```php
<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Custom Icon Sets
    |--------------------------------------------------------------------------
    |
    | Register your custom SVG icon sets here. Each set requires a path to
    | the directory containing SVG files and a unique prefix for the icons.
    |
    */

    'sets' => [
        [
            'path' => resource_path('icons/fontawesome-pro'),
            'prefix' => 'fa',
        ],
        [
            'path' => resource_path('icons/heroicons'),
            'prefix' => 'hero',
        ],
        [
            'path' => resource_path('icons/custom'),
            'prefix' => 'custom',
        ],
    ],
];
```

## Step 4: Prepare Your Icon Files

Create the directories and place your SVG icon files:

```
resources/
├── icons/
│   ├── fontawesome-pro/
│   │   ├── home.svg
│   │   ├── user.svg
│   │   └── settings.svg
│   ├── heroicons/
│   │   ├── bell.svg
│   │   ├── calendar.svg
│   │   └── chart.svg
│   └── custom/
│       ├── logo.svg
│       └── brand.svg
```

**Important:** Ensure your SVG files are clean and optimized. Remove any `width`, `height`, or `fill` attributes to allow for proper styling via CSS classes.

## Step 5: Use Icons in Your Templates

Once configured, you can use your icons as Blade components:

```blade
{{-- Font Awesome Pro icons --}}
<x-icon-fa-home class="w-6 h-6 text-gray-600" />
<x-icon-fa-user class="w-5 h-5 text-blue-500" />

{{-- Heroicons --}}
<x-icon-hero-bell class="w-4 h-4" />
<x-icon-hero-calendar class="w-6 h-6 text-green-500" />

{{-- Custom icons --}}
<x-icon-custom-logo class="w-8 h-8" />
<x-icon-custom-brand class="w-12 h-12 text-purple-600" />
```

## Verification

To verify your installation is working correctly:

1. **Check the configuration is published:**
   ```bash
   ls -la config/custom-icons.php
   ```

2. **Test an icon in a Blade view:**
   ```blade
   <x-icon-fa-home class="w-6 h-6" />
   ```

3. **Check for errors in Laravel logs:**
   ```bash
   tail -f storage/logs/laravel.log
   ```

## Advanced Configuration

### Font Awesome Pro Integration

For Font Awesome Pro users, extract your purchased icons to a directory:

```bash
# Extract Font Awesome Pro SVGs
unzip fontawesome-pro-6.x.x-web.zip
cp -r fontawesome-pro-6.x.x-web/svgs/* resources/icons/fontawesome-pro/
```

Update your config:

```php
'sets' => [
    [
        'path' => resource_path('icons/fontawesome-pro/solid'),
        'prefix' => 'fas',
    ],
    [
        'path' => resource_path('icons/fontawesome-pro/regular'),
        'prefix' => 'far',
    ],
    [
        'path' => resource_path('icons/fontawesome-pro/brands'),
        'prefix' => 'fab',
    ],
],
```

### Multiple Icon Libraries

You can register multiple icon libraries simultaneously:

```php
'sets' => [
    ['path' => resource_path('icons/heroicons'), 'prefix' => 'hero'],
    ['path' => resource_path('icons/tabler'), 'prefix' => 'tabler'],
    ['path' => resource_path('icons/feather'), 'prefix' => 'feather'],
    ['path' => resource_path('icons/phosphor'), 'prefix' => 'phosphor'],
],
```

## Troubleshooting

### Icons Not Displaying

1. **Check file paths:** Ensure the `path` in your config points to existing directories
2. **Verify SVG format:** Icons should be valid SVG files without `width`, `height`, or hardcoded `fill` attributes
3. **Check naming:** SVG filenames should use kebab-case (e.g., `user-profile.svg`)
4. **Clear config cache:** Run `php artisan config:clear` after configuration changes

### Permission Issues

Ensure Laravel can read your icon directories:

```bash
chmod -R 755 resources/icons/
```

### Component Not Found

If you get "Component not found" errors:

1. Clear view cache: `php artisan view:clear`
2. Verify the prefix and filename match your usage
3. Check Laravel logs for detailed error messages

## Next Steps

Now that you have the package installed and configured:

- Explore [Usage Examples](usage-examples.md) for practical implementation patterns
- Learn about [Extension API](extension-api.md) for programmatic icon registration
- Review [Architecture Overview](architecture.md) to understand how the system works
- Check the [Migration Guide](migration.md) if upgrading from v1.x
