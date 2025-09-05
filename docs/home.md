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
* [Installation](guide/installation) - Install and configure the package
* [Usage Examples](guide/usage-examples) - Practical examples and implementation patterns

### Integration Guides
* [Blade Directives](guide/blade-directives) - Using Blade directives in templates
* [Service Provider](guide/service-provider) - Understanding the service provider functionality
* [Asset Management](guide/asset-management) - Managing icons assets and optimization

### API Reference
* [Functions](reference/functions) - Core class methods and their parameters
* [Helper Functions](reference/helper-functions) - Global helper functions and usage

### Development
* [AI Guidelines](guide/ai-guidelines) - Guidelines for AI-assisted development with icons

### Browse by Section
* [Guide](guide) - Comprehensive guides for getting started and implementation
* [Reference](reference) - Technical API reference documentation
