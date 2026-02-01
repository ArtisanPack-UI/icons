---
title: Migration Guide
---

# Migration Guide

## v2.0 to v2.1

This guide will help you migrate from v2.0 to v2.1. The v2.1 release migrates from the `tormjens/eventy` package to the new `artisanpack-ui/hooks` package for event/filter management.

### Overview of Changes

The main change in v2.1 is the replacement of the `tormjens/eventy` package with `artisanpack-ui/hooks`. This affects how third-party packages register icon sets programmatically.

### Breaking Changes

#### Event/Filter Package Migration

- **Removed**: `tormjens/eventy` dependency
- **Added**: `artisanpack-ui/hooks` ^1.0 dependency
- **Changed**: Filter syntax from `Eventy::addFilter()` to `addFilter()` global helper

### Migration Steps

#### Step 1: Update Dependencies

Update your `composer.json`:

```json
{
    "require": {
        "artisanpack-ui/icons": "^2.1"
    }
}
```

Run the update:
```bash
composer update artisanpack-ui/icons
```

#### Step 2: Update Filter Registration Code

If you have any packages that register icon sets programmatically, update the filter syntax:

**Before (v2.0):**
```php
use TorMorten\Eventy\Facades\Eventy;
use ArtisanPackUI\Icons\Registries\IconSetRegistration;

// In your service provider
Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
    $registry->addSet(__DIR__ . '/../../resources/icons', 'mypackage');
    return $registry;
});
```

**After (v2.1):**
```php
use ArtisanPackUI\Icons\Registries\IconSetRegistration;

// In your service provider - no Eventy import needed
addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
    $registry->addSet(__DIR__ . '/../../resources/icons', 'mypackage');
    return $registry;
});
```

#### Step 3: Remove Eventy Imports

Remove any `use TorMorten\Eventy\Facades\Eventy;` imports from your files.

#### Step 4: Test Your Icon Registrations

Verify that your icon sets are still registered correctly:

```bash
php artisan tinker
>>> app(BladeUI\Icons\Factory::class)->all()
```

### What Stays the Same

- Configuration file format (`config/artisanpack/icons.php`) remains unchanged
- Blade component usage (`<x-icon-prefix-name />`) remains unchanged
- Icon set registration via config remains unchanged
- All other functionality remains unchanged

### Benefits of Migration

- **Better Laravel Integration**: The `artisanpack-ui/hooks` package is purpose-built for Laravel
- **Consistent API**: Uses the same hooks system across all ArtisanPack UI packages
- **Active Maintenance**: Maintained by the ArtisanPack team

---

## v1.x to v2.0

This guide will help you migrate from ArtisanPack UI Icons v1.x to v2.0. The v2.0 release represents a fundamental architectural change from a hardcoded icon provider to an extensibility layer for custom icon sets.

## Overview of Changes

ArtisanPack UI Icons v2.0 transforms the package from providing thousands of hardcoded icons to being an extensibility layer that allows you to register and use your own custom icon sets with `blade-ui-kit/blade-icons`.

### Key Architectural Changes

- **No more hardcoded icons** - Package no longer includes built-in icon arrays
- **Custom icon set registration** - You now register your own SVG icon collections
- **Blade component approach** - Icons are used as `<x-icon-prefix-name />` components
- **Memory efficiency** - Massive reduction in memory footprint (95%+ improvement)
- **Event-driven extensibility** - Third-party packages can register icon sets programmatically

## Breaking Changes

### 1. Removed Classes and Methods

#### Icons Class
```php
// ❌ REMOVED in v2.0
use ArtisanPackUI\Icons\Icons;

$icons = new Icons();
$allIcons = $icons->getIcons();
$iconsList = $icons->iconsList();
```

#### Icons Facade
```php
// ❌ REMOVED in v2.0
use ArtisanPackUI\Icons\Facades\Icons;

$allIcons = Icons::getIcons();
$iconsList = Icons::iconsList();
```

### 2. Removed Helper Functions

```php
// ❌ REMOVED in v2.0
$allIcons = getIcons();
$iconsList = iconsLists();
$iconsService = icons();
```

### 3. Removed Blade Directives

```blade
{{-- ❌ REMOVED in v2.0 --}}
@apIcons
```

### 4. Removed Icon Filtering

```php
// ❌ REMOVED in v2.0
$solidIcons = getIcons(['type' => 'solid']);
$navIcons = getIcons(['category' => 'navigation']);
$filteredIcons = getIcons(['category' => 'social', 'type' => 'regular']);
```

### 5. Removed Asset Serving

```php
// ❌ REMOVED in v2.0 - No more asset routes or CSS serving
// Previously served at routes like /artisanpack-ui-icons/css
```

## Migration Steps

### Step 1: Update Dependencies

Update your `composer.json`:

```json
{
    "require": {
        "artisanpack-ui/icons": "^2.0"
    }
}
```

Run the update:
```bash
composer update artisanpack-ui/icons
```

### Step 2: Publish New Configuration

```bash
php artisan vendor:publish --tag=artisanpack-package-config
```

### Step 3: Remove Old Code

Remove any usage of the old API:

```php
// Remove these imports
use ArtisanPackUI\Icons\Icons;
use ArtisanPackUI\Icons\Facades\Icons;

// Remove these function calls
getIcons();
iconsLists();
icons();
```

Remove Blade directives:
```blade
{{-- Remove this --}}
@apIcons
```

### Step 4: Obtain Icon Sets

Since v2.0 doesn't include hardcoded icons, you need to source your own:

#### Option 1: Font Awesome Pro (Recommended)
```bash
# Extract Font Awesome Pro SVGs to resources/icons/
unzip fontawesome-pro-6.x.x-web.zip
cp -r fontawesome-pro-6.x.x-web/svgs/* resources/icons/fontawesome/
```

#### Option 2: Free Icon Sets
Download free icon sets like Heroicons, Tabler Icons, or Feather:

```bash
# Example: Heroicons
mkdir resources/icons/heroicons
# Download SVG files to this directory
```

#### Option 3: Custom Icons
Place your custom SVG files in organized directories:
```
resources/
└── icons/
    ├── custom/
    │   ├── logo.svg
    │   └── brand.svg
    └── ui/
        ├── save.svg
        └── cancel.svg
```

### Step 5: Configure Icon Sets

Edit `config/artisanpack/icons.php`:

```php
return [
    'sets' => [
        [
            'path' => resource_path('icons/fontawesome/solid'),
            'prefix' => 'fas',
        ],
        [
            'path' => resource_path('icons/fontawesome/regular'),
            'prefix' => 'far',
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

### Step 6: Update Templates

Replace old icon usage with new Blade components:

```blade
{{-- Old v1.x approach --}}
@apIcons
<i class="ap-icon ap-icon-home"></i>
<i class="ap-icon ap-icon-user"></i>

{{-- New v2.0 approach --}}
<x-icon-fas-home class="w-6 h-6" />
<x-icon-hero-user class="w-5 h-5 text-blue-500" />
```

## Migration Patterns

### Replacing Icon Arrays

**Old v1.x:**
```php
$icons = getIcons(['category' => 'navigation']);
foreach ($icons as $iconName => $iconData) {
    echo "<i class='ap-icon ap-icon-{$iconName}'></i>";
}
```

**New v2.0:**
```blade
@php
    $navIcons = ['home', 'menu', 'search', 'settings'];
@endphp

@foreach($navIcons as $icon)
    <x-dynamic-component :component="'icon-hero-' . $icon" class="w-5 h-5" />
@endforeach
```

### Replacing Dynamic Icon Loading

**Old v1.x:**
```php
$userIcon = 'user';
$iconData = getIcons()[$userIcon] ?? null;
if ($iconData) {
    echo "<i class='ap-icon ap-icon-{$userIcon}'></i>";
}
```

**New v2.0:**
```blade
@php $userIcon = 'user'; @endphp
<x-dynamic-component :component="'icon-fas-' . $userIcon" class="w-5 h-5" />
```

### Replacing Icon Lists

**Old v1.x:**
```php
$availableIcons = array_keys(getIcons());
```

**New v2.0:**
```php
// Create your own icon registry
$availableIcons = [
    'fas' => ['home', 'user', 'settings'],
    'hero' => ['bell', 'calendar', 'chart'],
    'custom' => ['logo', 'brand'],
];
```

## Common Migration Scenarios

### Scenario 1: Navigation Menu

**Old v1.x:**
```blade
@apIcons
<nav>
    <a href="/home"><i class="ap-icon ap-icon-home"></i> Home</a>
    <a href="/profile"><i class="ap-icon ap-icon-user"></i> Profile</a>
    <a href="/settings"><i class="ap-icon ap-icon-cog"></i> Settings</a>
</nav>
```

**New v2.0:**
```blade
<nav>
    <a href="/home" class="flex items-center">
        <x-icon-fas-home class="w-5 h-5 mr-2" /> Home
    </a>
    <a href="/profile" class="flex items-center">
        <x-icon-fas-user class="w-5 h-5 mr-2" /> Profile
    </a>
    <a href="/settings" class="flex items-center">
        <x-icon-fas-cog class="w-5 h-5 mr-2" /> Settings
    </a>
</nav>
```

### Scenario 2: Dynamic Button Icons

**Old v1.x:**
```php
@php
    $actions = [
        'save' => ['icon' => 'save', 'label' => 'Save'],
        'cancel' => ['icon' => 'times', 'label' => 'Cancel'],
    ];
@endphp

@foreach($actions as $action => $data)
    <button class="btn">
        <i class="ap-icon ap-icon-{{ $data['icon'] }}"></i>
        {{ $data['label'] }}
    </button>
@endforeach
```

**New v2.0:**
```blade
@php
    $actions = [
        'save' => ['icon' => 'fas-save', 'label' => 'Save'],
        'cancel' => ['icon' => 'fas-times', 'label' => 'Cancel'],
    ];
@endphp

@foreach($actions as $action => $data)
    <button class="btn flex items-center">
        <x-dynamic-component :component="'icon-' . $data['icon']" class="w-4 h-4 mr-2" />
        {{ $data['label'] }}
    </button>
@endforeach
```

### Scenario 3: Icon Picker/Selector

**Old v1.x:**
```php
$availableIcons = getIcons(['category' => 'interface']);
```

**New v2.0:**
```php
// Define your available icons explicitly
$availableIcons = [
    'interface' => [
        'fas-home' => 'Home',
        'fas-user' => 'User',
        'fas-cog' => 'Settings',
        'hero-bell' => 'Notifications',
        'hero-calendar' => 'Calendar',
    ],
];
```

## Troubleshooting

### Icons Not Displaying

**Problem:** Icons don't appear after migration.

**Solutions:**
1. Verify icon files exist in configured paths
2. Check that SVG files are properly formatted (no hardcoded dimensions/fills)
3. Ensure prefixes in config match component usage
4. Clear Laravel caches: `php artisan config:clear && php artisan view:clear`

### Memory Issues Resolved

**Problem:** Old version consumed too much memory.

**Solution:** v2.0 eliminates this issue entirely by removing hardcoded icon arrays. Memory usage is now minimal.

### Missing Icons

**Problem:** Specific icons from v1.x are no longer available.

**Solutions:**
1. **Identify the source**: Find where the missing icons originated (likely Font Awesome)
2. **Download equivalent**: Get the appropriate icon set (Font Awesome Pro, Heroicons, etc.)
3. **Map icon names**: Some icon names may differ between sets
4. **Create custom**: For unique icons, create your own SVG files

### Performance Issues

**Problem:** Icons loading slowly.

**Solutions:**
1. Optimize SVG files (remove unnecessary attributes)
2. Use icon caching strategies
3. Load icons conditionally when needed

### Third-Party Package Integration

**Problem:** Package relied on old icon system.

**Solutions:**
1. Update packages that support the new system
2. Use the Extension API to register package-specific icon sets
3. Contact package maintainers for v2.0 compatibility

## Benefits After Migration

### Performance Improvements
- **95%+ memory reduction** - No more massive icon arrays
- **Faster loading** - Only load icons you actually use
- **Better caching** - Leverage browser caching for SVG files

### Flexibility Gains
- **Use any icon set** - Font Awesome Pro, Heroicons, custom icons
- **Multiple sets** - Mix different icon libraries in one project
- **Easy updates** - Update icon sets without package updates

### Developer Experience
- **Better IDE support** - Blade components provide better autocompletion
- **Easier customization** - Direct control over SVG files
- **Modern approach** - Aligned with Laravel/Blade best practices

## Need Help?

If you encounter issues during migration:

1. **Check the logs** - Laravel logs often contain helpful error messages
2. **Verify file paths** - Ensure icon directories and files exist
3. **Review configuration** - Double-check `config/artisanpack/icons.php`
4. **Test incrementally** - Migrate one icon set at a time

## Next Steps

After completing your migration:

- Explore [Usage Examples](Usage-Examples) for advanced patterns
- Review [Architecture Overview](Architecture) to understand the new system
- Learn about [Extension API](Extension-Api) if you maintain packages
- Check [Installation Guide](Installation) for optimization tips