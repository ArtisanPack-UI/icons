# ArtisanPack UI Icon Changelog

## 2.1.0 - 2025-11-22

### 🚨 Breaking Changes

#### Hooks Package Migration
- **CHANGED**: Migrated from `tormjens/eventy` to `artisanpack-ui/hooks` for event/filter management
- **CHANGED**: Filter syntax updated from `Eventy::addFilter()` to `addFilter()` global helper
- **REMOVED**: Dependency on `tormjens/eventy` package
- **ADDED**: Dependency on `artisanpack-ui/hooks` ^1.0

**Migration Guide:**
```php
// Before (v2.0)
use TorMorten\Eventy\Facades\Eventy;

Eventy::addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
    $registry->addSet(__DIR__ . '/../../resources/icons', 'mypackage');
    return $registry;
});

// After (v2.1)
use ArtisanPackUI\Icons\Registries\IconSetRegistration;

addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
    $registry->addSet(__DIR__ . '/../../resources/icons', 'mypackage');
    return $registry;
});
```

### ✨ New Features

#### Laravel Boost Integration
- **NEW**: Added AI guidelines for Laravel Boost at `resources/boost/guidelines/core.blade.php`
- **NEW**: Automatic guideline loading when users run `php artisan boost:install`
- Provides AI-powered code generation support for icon registration and usage

#### Developer Experience
- **NEW**: Added Claude Code settings (`.claude/settings.local.json`) for improved AI-assisted development
- **NEW**: Pre-configured permissions for common development tasks (mkdir, git checkout, composer, tests)

### 🔧 Improvements

#### CI/CD Pipeline
- **FIXED**: GitLab CI build stage now uses `php:8.2-cli` image instead of `composer:2`
- **FIXED**: Resolved PHP version compatibility issues (locked dependencies support PHP 8.2-8.4)
- **IMPROVED**: More reliable dependency installation in CI environment

#### Documentation
- **UPDATED**: All documentation examples migrated to new `addFilter()` syntax
- **UPDATED**: README.md with correct hooks usage
- **UPDATED**: Extension API documentation (`docs/guide/extension-api.md`)
- **UPDATED**: Architecture documentation (`docs/guide/architecture.md`)
- **UPDATED**: Service Provider documentation (`docs/guide/service-provider.md`)

### 🐛 Bug Fixes
- Fixed all test suite compatibility with new hooks package (39 tests passing)
- Removed unused Eventy imports from test files
- Updated TestCase to use `HooksServiceProvider` instead of `EventServiceProvider`

### 📦 Dependencies
- Replaced `tormjens/eventy: ^0.9.4` with `artisanpack-ui/hooks: ^1.0`
- All other dependencies remain unchanged

### 🔄 Upgrade Path
1. Update your `composer.json` to require `artisanpack-ui/hooks: ^1.0` instead of `tormjens/eventy`
2. Run `composer update`
3. Update any custom code using `Eventy::addFilter()` to use `addFilter()` global helper
4. Remove any `use TorMorten\Eventy\Facades\Eventy;` imports
5. Test your icon registrations work correctly

## 2.0.0 - 2025-10-06

### 🚨 MAJOR BREAKING CHANGES

This release represents a fundamental architectural transformation from a hardcoded icon provider to an extensibility layer for custom icon sets using `blade-ui-kit/blade-icons`.

#### Removed Classes and Methods
- **REMOVED**: `ArtisanPackUI\Icons\Icons` class (17,282 lines)
  - `getIcons()` method
  - `iconsList()` method
- **REMOVED**: `ArtisanPackUI\Icons\Facades\Icons` facade
- **REMOVED**: All facades directory and classes

#### Removed Helper Functions
- **REMOVED**: `getIcons()` global helper function
- **REMOVED**: `iconsLists()` global helper function  
- **REMOVED**: `icons()` global helper function
- **REMOVED**: `helpers.php` file completely

#### Removed Blade Directives
- **REMOVED**: `@apIcons` Blade directive
- **REMOVED**: All hardcoded icon rendering functionality

#### Removed Asset Serving
- **REMOVED**: Asset serving routes (previously at `/artisanpack-ui-icons/css`)
- **REMOVED**: `dist/` directory with CSS and webfonts
- **REMOVED**: Font Awesome bundled assets
- **REMOVED**: `package.json` and Node.js build processes

#### Removed Icon Filtering
- **REMOVED**: Icon filtering by category, type, or other attributes
- **REMOVED**: All hardcoded icon data arrays

### ✨ New Features

#### Custom Icon Set Registration
- **NEW**: Configuration-based icon set registration via `config/artisanpack/icons.php`
- **NEW**: Event-driven icon set registration using `ap.icons.register-icon-sets` filter
- **NEW**: `IconSetRegistration` class for structured icon set definitions
- **NEW**: Hybrid registration system (config + events)

#### Modern Architecture
- **NEW**: Integration with `blade-ui-kit/blade-icons` v1.8+
- **NEW**: Blade component approach: `<x-icon-prefix-name />`
- **NEW**: Support for multiple icon sets (Font Awesome Pro, Heroicons, custom)
- **NEW**: Memory efficient - 95%+ reduction in memory usage

### 🔧 Configuration Changes

#### New Configuration File
```bash
php artisan vendor:publish --tag=artisanpack-package-config
```

#### Required Dependencies
- **ADDED**: `blade-ui-kit/blade-icons ^1.8`
- **KEPT**: `tormjens/eventy ^0.9.4` (for event-driven extensibility)
- **REMOVED**: `ext-fileinfo` dependency

### 📚 Migration Guide

**⚠️ IMPORTANT**: This release requires manual migration. See [Migration Guide](docs/guide/migration.md) for detailed instructions.

#### Quick Migration Steps
1. Update composer dependencies to `^2.0`
2. Publish new configuration: `php artisan vendor:publish --tag=artisanpack-package-config`
3. Remove old code (see migration guide for details)
4. Obtain and configure your icon sets (Font Awesome Pro recommended)
5. Update templates to use new Blade components

#### Before/After Examples

**Old v1.x:**
```blade
@apIcons
<i class="ap-icon ap-icon-home"></i>
```

**New v2.0:**
```blade
<x-icon-fas-home class="w-6 h-6" />
```

### 🚨 Deprecation Notice

#### v1.x End of Life
- **v1.x Support**: Continues until **December 31, 2025**
- **Security Updates**: Critical security fixes only
- **Feature Development**: All new features will be v2.0+ only

#### Migration Timeline
- **October 2025**: v2.0.0 release
- **November 2025 - March 2026**: Migration period with dual support
- **April 2026**: v1.x marked as deprecated (warnings in composer)
- **January 2027**: v1.x end of life

#### Support Resources
- 📖 [Migration Guide](docs/guide/migration.md) - Comprehensive upgrade instructions
- 🏗️ [Architecture Guide](docs/guide/architecture.md) - Understanding v2.0 design  
- 🔌 [Extension API](docs/guide/extension-api.md) - For package developers
- 💡 [Usage Examples](docs/guide/usage-examples.md) - Common patterns and recipes

#### Getting Help
- **Documentation**: Full migration guide with troubleshooting
- **Community**: Discussion and questions via GitLab issues
- **Professional Support**: Available for enterprise migrations

### 🎯 Benefits of v2.0

#### Performance Improvements
- **Memory Usage**: 95%+ reduction (no more hardcoded icon arrays)
- **Loading Speed**: Only load icons you actually use
- **Caching**: Better browser caching with SVG components

#### Flexibility
- **Any Icon Set**: Use Font Awesome Pro, Heroicons, custom icons
- **Multiple Sets**: Mix different icon libraries in one project  
- **Easy Updates**: Update icon sets independently of package

#### Developer Experience
- **Better IDE Support**: Blade components with autocompletion
- **Modern Approach**: Aligned with Laravel/Blade best practices
- **Direct Control**: Manage your own SVG files

---

## 1.0.4 - May 14, 2025

- Fixed errors found while renaming the vendor.

## 1.0.3 - May 14, 2025

* Corrected the version number in the composer.json file.

## 1.0.2 - May 14, 2025

* Updated vendor name to ArtisanPack UI.

## 1.0.1 - May 14, 2025

* Updated the version number for the tormjens/eventy package.

## 1.0.0 - April 30, 2025

* Initial release
