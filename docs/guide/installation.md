---
title: Installation
---

# Installation

This guide will walk you through installing and setting up the ArtisanPack UI Icons package in your Laravel application.

## Requirements

- PHP 8.2 or higher
- Laravel 5.3 or higher
- Composer

## Installing via Composer

You can install the package via Composer by running the following command:

```bash
composer require artisanpack-ui/icons
```

## Service Provider Registration

The package uses Laravel's auto-discovery feature, so the service provider will be automatically registered. If you need to manually register it, add the following to your `config/app.php` file:

```php
'providers' => [
    // ...
    ArtisanPackUI\Icons\IconsServiceProvider::class,
],
```

## Facade Registration (Optional)

If you want to use the Icons facade, add it to your `config/app.php` file:

```php
'aliases' => [
    // ...
    'Icons' => ArtisanPackUI\Icons\Facades\Icons::class,
],
```

## Including Icon Styles

To include the icon CSS in your Blade templates, use the `@apIcons` directive:

```blade
<!DOCTYPE html>
<html>
<head>
    @apIcons
    <!-- Other head content -->
</head>
<body>
    <!-- Your content -->
</body>
</html>
```

## Verification

To verify the installation is working correctly, you can test it in your application:

```php
use ArtisanPackUI\Icons\Facades\Icons;

// Get all icons
$icons = Icons::getIcons();

// Or use the helper function
$icons = getIcons();
```

## Next Steps

Now that you have the package installed, you can:

- Learn about available [Functions](functions)
- Explore [Helper Functions](helper-functions)
- Check out [Usage Examples](usage-examples)
- Review [Blade Directives](blade-directives)