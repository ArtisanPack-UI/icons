---
title: Service Provider
---

# Service Provider

The ArtisanPack UI Icons package includes an `IconsServiceProvider` that handles service registration, route setup, and Blade directive registration.

## Automatic Registration

The service provider is automatically registered through Laravel's package auto-discovery feature. You don't need to manually register it unless you've disabled auto-discovery.

## Manual Registration

If you need to manually register the service provider, add it to your `config/app.php` file:

```php
'providers' => [
    // ...
    ArtisanPackUI\Icons\IconsServiceProvider::class,
],
```

## Service Registration

The service provider registers the Icons class as a singleton in Laravel's service container:

```php
public function register(): void
{
    $this->app->singleton('icons', function ($app) {
        return new Icons();
    });
}
```

This allows you to access the Icons service using:

```php
// Via helper function
$icons = icons();

// Via service container
$icons = app('icons');

// Via dependency injection
public function __construct(Icons $icons)
{
    $this->icons = $icons;
}
```

## Asset Route Registration

The service provider automatically registers a route for serving package assets:

**Route Pattern:** `/artisanpack-ui-package-assets/{vendor}/{package}/{path}`

This route allows the package to serve CSS files and other assets directly from the vendor directory. The route:

- Resolves the full path to the requested asset
- Validates the file exists and is accessible
- Determines the appropriate MIME type
- Returns the file with proper headers
- Returns 404 if the file doesn't exist

**Example Usage:**
```
/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/css/all.css
```

### Security Features

The asset serving route includes security measures:
- Uses `realpath()` to resolve the actual file path
- Validates that files exist before serving
- Includes MIME type detection for proper content headers
- Restricts access to files within the package directory

## Blade Directive Registration

The service provider registers the `@apIcons` Blade directive:

```php
Blade::directive('apIcons', function ($expression) {
    return '<link href="' . url('/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/css/all.css') . '" rel="stylesheet">';
});
```

### Usage

Include icon styles in your Blade templates:

```blade
<!DOCTYPE html>
<html>
<head>
    @apIcons
    <title>My App</title>
</head>
<body>
    <!-- Your content -->
</body>
</html>
```

This will output:
```html
<link href="http://yourapp.com/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/css/all.css" rel="stylesheet">
```

## MIME Type Detection

The service provider includes a comprehensive MIME type detection method that supports:

### Supported File Types

- **Text Files:** txt, htm, html, php, css, js, json, xml
- **Images:** png, jpg, jpeg, gif, bmp, ico, tiff, svg
- **Archives:** zip, rar, exe, msi, cab
- **Audio/Video:** mp3, qt, mov
- **Adobe:** pdf, psd, ai, eps, ps
- **Microsoft Office:** doc, rtf, xls, ppt
- **OpenOffice:** odt, ods

### Fallback Detection

If the built-in MIME type mapping doesn't find a match, the system will:
1. Use PHP's `finfo_open()` if available
2. Fall back to `application/octet-stream` as default

## Development Notes

The asset serving route includes a comment indicating it's "For development purposes". In production, you may want to:

- Serve assets through a web server (Apache/Nginx) for better performance
- Use a CDN for asset delivery
- Implement caching headers for static assets

## See Also

- [Installation](installation) - Setup and configuration
- [Blade Directives](blade-directives) - Detailed Blade directive usage
- [Asset Management](asset-management) - Asset serving and optimization