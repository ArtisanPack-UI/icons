---
title: ArtisanPack UI Icons
---

# ArtisanPack UI Icons

The ArtisanPack UI Icons package provides a comprehensive set of icons for use in the ArtisanPack UI framework as well as a way for developers to add their own icons and to call them based on category and type.

## Quick Start

You can use the functions in this package through the Facade or by directly calling the helper functions.

### Using the Facade

```php
use ArtisanPackUI\Icons\Facades\Icons as Icons;

echo Icons::getIcons();
```

### Using Helper Functions

```php
echo getIcons();
```

### Using Blade Directive

```blade
@apIcons
```

## Table of Contents

### Getting Started
* [Installation](Guide-Installation) - Install and configure the package
* [Usage Examples](Guide-Usage-Examples) - Practical examples and implementation patterns

### Integration Guides
* [Blade Directives](Guide-Blade-Directives) - Using Blade directives in templates
* [Service Provider](Guide-Service-Provider) - Understanding the service provider functionality
* [Asset Management](Guide-Asset-Management) - Managing icons assets and optimization

### API Reference
* [Functions](Reference-Functions) - Core class methods and their parameters
* [Helper Functions](Reference-Helper-Functions) - Global helper functions and usage

### Development
* [AI Guidelines](Guide-Ai-Guidelines) - Guidelines for AI-assisted development with icons

### Browse by Section
* [Guide](Guide) - Comprehensive guides for getting started and implementation
* [Reference](Reference) - Technical API reference documentation
