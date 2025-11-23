## ArtisanPack UI Icons

This package provides an extensibility layer for Blade Icons that enables flexible registration of custom SVG icon sets via config or events. It's built on top of `blade-ui-kit/blade-icons` and is designed for zero hardcoded icons—users bring their own icon files.

### Configuration Structure

Icon sets are registered in `config/artisanpack/icons.php` with the following structure:

@verbatim
<code-snippet name="Icon Configuration Structure" lang="php">
return [
    'sets' => [
        'fa' => [
            'path' => resource_path('icons/fontawesome-pro'),
            'prefix' => 'fa',
        ],
        'hero' => [
            'path' => resource_path('icons/heroicons'),
            'prefix' => 'hero',
        ],
    ],
];
</code-snippet>
@endverbatim

Each set requires:
- **path**: Absolute path to directory containing SVG files
- **prefix**: Unique identifier for the icon set

### Using Icons in Blade

Icons use the pattern `<x-icon-{prefix}-{iconname} />` where the icon name matches the SVG filename (without extension):

@verbatim
<code-snippet name="Using Icons in Blade Templates" lang="blade">
{{-- Font Awesome Pro icons with 'fa' prefix --}}
<x-icon-fa-home class="w-6 h-6" />
<x-icon-fa-user class="w-5 h-5 text-blue-500" />

{{-- Heroicons with 'hero' prefix --}}
<x-icon-hero-arrow-left class="w-4 h-4" />
</code-snippet>
@endverbatim

### Event-Driven Registration (For Packages)

Third-party packages can register icon sets programmatically via the `ap.icons.register-icon-sets` filter hook:

@verbatim
<code-snippet name="Registering Icon Sets via Events" lang="php">
use ArtisanPackUI\Icons\Registries\IconSetRegistration;

// In a service provider's boot() method
addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) {
    $registry->addSet(__DIR__ . '/../../resources/icons', 'mypackage');
    return $registry;
});
</code-snippet>
@endverbatim

### File Organization

SVG files should be organized in the configured path directory:

@verbatim
<code-snippet name="Icon Directory Structure" lang="text">
resources/
├── icons/
│   ├── fontawesome-pro/
│   │   ├── home.svg
│   │   ├── user.svg
│   │   └── arrow-left.svg
│   └── custom-brand/
│       ├── logo.svg
│       └── badge.svg
</code-snippet>
@endverbatim

### Best Practices

- **Path Validation**: Always use valid absolute paths (e.g., `resource_path()`, `__DIR__`, or `base_path()`)
- **Unique Prefixes**: Each icon set must have a unique prefix to avoid conflicts
- **SVG Filenames**: Use kebab-case filenames (e.g., `arrow-left.svg` becomes `<x-icon-{prefix}-arrow-left />`)
- **Config vs Events**: Use config-based registration for application icons; use event-driven registration for package-distributed icons
