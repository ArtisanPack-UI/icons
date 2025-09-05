---
title: Asset Management
---

# Asset Management

The ArtisanPack UI Icons package includes comprehensive asset management features for serving icon stylesheets and optimizing performance in both development and production environments.

## Asset Structure

The package includes the following asset files:

```
dist/
├── css/
│   └── all.css          # Complete icon stylesheet
└── webfonts/
    ├── fa-brands-400.*  # Brand icons font files
    ├── fa-regular-400.* # Regular icons font files
    └── fa-solid-900.*   # Solid icons font files
```

## Asset Serving Route

The package automatically registers a dynamic route for serving assets:

**Route Pattern:** `/artisanpack-ui-package-assets/{vendor}/{package}/{path}`

### Route Features

- **Dynamic Path Resolution:** Serves any file from the package directory
- **Security Validation:** Uses `realpath()` to prevent directory traversal
- **MIME Type Detection:** Automatically sets appropriate content headers
- **404 Handling:** Returns proper error responses for missing files

### Example URLs

```
# Main CSS file
/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/css/all.css

# Font files
/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/webfonts/fa-solid-900.woff2
/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/webfonts/fa-brands-400.woff2
```

## Development vs Production

### Development Environment

**Advantages:**
- Automatic asset serving without additional configuration
- No need to publish assets to public directory
- Easy updates when package is updated

**Usage:**
```blade
@apIcons
```

### Production Environment

For better performance in production, consider these alternatives:

#### Option 1: Asset Publishing

Publish assets to your public directory:

```bash
php artisan vendor:publish --provider="ArtisanPackUI\Icons\IconsServiceProvider" --tag="assets"
```

Then reference them directly:
```blade
<link href="{{ asset('vendor/artisanpack-ui/icons/css/all.css') }}" rel="stylesheet">
```

#### Option 2: CDN Integration

Host assets on a CDN for better performance:

```blade
<link href="https://cdn.yoursite.com/assets/icons/all.css" rel="stylesheet">
```

#### Option 3: Asset Compilation

Include icon styles in your build process using Laravel Mix or Vite:

```javascript
// webpack.mix.js
mix.styles([
    'vendor/artisanpack-ui/icons/dist/css/all.css',
    'resources/css/app.css'
], 'public/css/app.css');
```

## Performance Optimization

### CSS Optimization

The complete `all.css` file includes styles for all icon types. For better performance:

1. **Create Custom Builds:** Extract only needed icon styles
2. **Implement Purging:** Remove unused CSS in production
3. **Enable Compression:** Use gzip/brotli compression
4. **Add Caching Headers:** Implement proper browser caching

### Font Loading Optimization

Optimize web font loading:

```css
/* Add to your CSS for better font loading */
@font-face {
  font-family: 'Font Awesome 6 Free';
  font-display: swap; /* Improves loading performance */
  /* other font-face properties */
}
```

### Preloading Critical Assets

Preload critical font files:

```blade
<link rel="preload" href="/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
```

## MIME Type Support

The asset serving route supports comprehensive MIME type detection:

### Web Assets
- **CSS:** `text/css`
- **JavaScript:** `application/javascript`
- **JSON:** `application/json`

### Fonts
- **WOFF:** `font/woff`
- **WOFF2:** `font/woff2`
- **TTF:** `font/ttf`
- **EOT:** `application/vnd.ms-fontobject`

### Images
- **SVG:** `image/svg+xml`
- **PNG:** `image/png`
- **JPEG:** `image/jpeg`

## Security Considerations

### Path Validation

The asset route includes security measures:

```php
$fullPath = realpath($packagePath . $path);

if ($fullPath !== false && is_file($fullPath)) {
    // Serve file
} else {
    abort(404);
}
```

### Access Restrictions

- Only files within the package directory can be served
- Directory traversal attempts are blocked
- Non-existent files return 404 responses
- Proper MIME types prevent content-type confusion attacks

## Caching Strategies

### Browser Caching

Implement proper cache headers:

```php
// In your middleware or server configuration
return response()->file($fullPath, [
    'Content-Type' => $mime,
    'Cache-Control' => 'public, max-age=31536000', // 1 year
    'ETag' => md5_file($fullPath)
]);
```

### CDN Caching

Configure CDN settings for optimal caching:

- **Cache Duration:** Set long cache times for versioned assets
- **Invalidation:** Implement cache busting when assets change
- **Compression:** Enable gzip/brotli compression

## Asset Versioning

For cache busting in production:

```php
// Generate versioned URLs
$version = filemtime(base_path('vendor/artisanpack-ui/icons/dist/css/all.css'));
$url = "/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/css/all.css?v={$version}";
```

## Troubleshooting

### Common Issues

**Assets not loading:**
- Check that the service provider is registered
- Verify the asset route is accessible
- Ensure file permissions are correct

**Performance issues:**
- Implement caching headers
- Consider CDN usage
- Optimize font loading with `font-display: swap`

**MIME type issues:**
- Check server configuration
- Verify file extensions are correct
- Test with different file types

### Debug Mode

Enable debug mode to troubleshoot asset issues:

```php
// Check if asset route exists
Route::getRoutes()->match(
    Request::create('/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/css/all.css')
);
```

## See Also

- [Service Provider](service-provider) - Asset route registration details
- [Blade Directives](blade-directives) - Using @apIcons directive
- [Installation](installation) - Initial setup requirements