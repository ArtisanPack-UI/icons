# ArtisanPack UI Icons

This package provides a comprehensive set of icons for use in the ArtisanPack UI framework as well as a way for developers to add their own icons and to call them based on category and type.

## Quick Start

### Installation

Install the package via Composer:

```bash
composer require artisanpack-ui/icons
```

### Basic Usage

```php
use ArtisanPackUI\Icons\Facades\Icons;

// Get all icons
$allIcons = Icons::getIcons();

// Get icons by type
$solidIcons = Icons::getIcons(['type' => 'solid']);

// Or use helper functions
$icons = getIcons(['category' => 'navigation']);
```

### Blade Integration

Include icon styles in your templates:

```blade
@apIcons
```

Use icon components:

```blade
<x-icon-home class="w-6 h-6" />
<x-icon-user class="w-5 h-5 text-blue-500" />
```

## Documentation

For comprehensive documentation, please visit the [docs](docs) directory:

### Getting Started
- **[Installation Guide](docs/guide/installation)** - Complete setup instructions
- **[Usage Examples](docs/guide/usage-examples)** - Practical implementation examples

### Integration
- **[Blade Directives](docs/guide/blade-directives)** - Template integration
- **[Service Provider](docs/guide/service-provider)** - Laravel service provider details
- **[Asset Management](docs/guide/asset-management)** - Asset serving and optimization

### API Reference
- **[Functions](docs/reference/functions)** - Core class methods
- **[Helper Functions](docs/reference/helper-functions)** - Global helper functions

### Browse All Documentation
- **[Guide](docs/guide)** - Step-by-step guides and tutorials
- **[Reference](docs/reference)** - Technical API documentation

## Features

- **Comprehensive Icon Set:** Includes solid, regular, and brand icon types
- **Flexible Filtering:** Filter icons by category, type, or custom criteria
- **Laravel Integration:** Native Laravel service provider and Blade directives
- **Multiple Access Methods:** Use facades, helper functions, or direct instantiation
- **Asset Management:** Built-in asset serving with security validation
- **Performance Optimized:** Includes caching strategies and optimization guides

## Requirements

- PHP 8.2 or higher
- Laravel 5.3 or higher
- Composer

## Contributing

As an open source project, this package is open to contributions from anyone. Please [read through the contributing guidelines](CONTRIBUTING.md) to learn more about how you can contribute to this project.
