---
title: Blade Directives
---

# Blade Directives

The ArtisanPack UI Icons package provides Blade directives to simplify the integration of icons into your Laravel Blade templates.

## @apIcons Directive

The `@apIcons` directive includes the necessary CSS stylesheets for the icon package.

### Basic Usage

Include the directive in the `<head>` section of your Blade template:

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    
    @apIcons
    
    <!-- Other stylesheets -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Your content -->
</body>
</html>
```

### Generated Output

The `@apIcons` directive generates the following HTML:

```html
<link href="http://yourapp.com/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/css/all.css" rel="stylesheet">
```

### How It Works

The directive:
1. Uses Laravel's `url()` helper to generate the full URL
2. Points to the asset serving route provided by the service provider
3. Loads the complete icon stylesheet (`all.css`)
4. Ensures proper styling for all icon types (solid, regular, brands)

## Icon Component Usage

While not a directive per se, the package is designed to work with Blade components for rendering individual icons:

### Component Syntax

```blade
<x-icon-[name] />
```

Where `[name]` is the icon identifier from the icon list.

### Examples

```blade
<!-- Home icon -->
<x-icon-home />

<!-- User icon -->
<x-icon-user />

<!-- Menu icon -->
<x-icon-menu />
```

### With Attributes

You can pass additional attributes to customize the icons:

```blade
<!-- With CSS classes -->
<x-icon-home class="text-blue-500 w-6 h-6" />

<!-- With custom attributes -->
<x-icon-user id="user-avatar" data-tooltip="User Profile" />

<!-- With type specification -->
<x-icon-heart type="solid" class="text-red-500" />
```

## Asset Management

### CSS File Structure

The `@apIcons` directive loads the main CSS file that includes styles for:

- **Solid icons** - Filled/solid style variants
- **Regular icons** - Outlined/regular style variants
- **Brand icons** - Logo and brand icons

### Performance Considerations

The directive loads the complete icon stylesheet. For production applications, consider:

1. **Custom CSS builds** - Create custom CSS files with only needed icons
2. **Caching** - Implement proper browser caching for the CSS file
3. **CDN** - Use a CDN for better asset delivery performance

### Asset Serving Route

The directive relies on the asset serving route registered by the service provider:

```
/artisanpack-ui-package-assets/artisanpack-ui/icons/dist/css/all.css
```

This route:
- Serves files directly from the package vendor directory
- Includes proper MIME type headers
- Provides security validation
- Returns 404 for missing files

## Integration Patterns

### Layout File Integration

Include the directive in your main layout file:

```blade
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    
    @apIcons
    
    @yield('styles')
</head>
<body>
    @yield('content')
    
    @yield('scripts')
</body>
</html>
```

### Conditional Loading

Load icons only when needed:

```blade
@if(isset($needsIcons) && $needsIcons)
    @apIcons
@endif
```

### With Asset Bundling

If using Laravel Mix or Vite, you might prefer to include the CSS in your build process instead of using the directive.

## Troubleshooting

### Common Issues

**Icons not displaying:**
- Ensure `@apIcons` is included in the `<head>` section
- Check that the asset serving route is accessible
- Verify the service provider is registered

**CSS conflicts:**
- The icon CSS might conflict with your application styles
- Consider scoping icon usage to specific containers
- Review CSS specificity rules

**Performance issues:**
- The complete CSS file might be large
- Consider implementing custom icon builds for production
- Use browser caching and CDN for asset delivery

## See Also

- [Service Provider](service-provider) - Asset serving route details
- [Installation](installation) - Setup requirements
- [Usage Examples](usage-examples) - Practical implementation examples
- [Asset Management](asset-management) - Advanced asset handling