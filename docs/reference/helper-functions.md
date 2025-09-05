---
title: Helper Functions
---

# Helper Functions

The ArtisanPack UI Icons package provides several global helper functions that allow you to access icon functionality without using facades or direct class instantiation.

## Available Helper Functions

### icons()

Returns an instance of the Icons service from Laravel's service container.

**Return**
- Icons - An instance of the ArtisanPackUI\Icons\Icons class

**Usage**
```php
$iconsService = icons();
$allIcons = $iconsService->getIcons();
```

**Since**
- 1.0.0

### getIcons( $args = [] )

A convenience wrapper around the Icons class `getIcons()` method. Retrieves a filtered list of icons based on the provided arguments.

**Parameters**
- Array - $args - An associative array of criteria to filter the icons. The keys represent the icon properties, and the values represent the filter conditions. If a value is an array, the method checks for inclusion; otherwise, it checks for equality.

**Return**
- Array - An array of icons that match the specified filtering criteria.

**Usage**
```php
// Get all icons
$allIcons = getIcons();

// Get solid icons only
$solidIcons = getIcons(['type' => 'solid']);

// Get regular icons only
$regularIcons = getIcons(['type' => 'regular']);

// Get brand icons only
$brandIcons = getIcons(['type' => 'brands']);

// Get icons from specific category
$categoryIcons = getIcons(['category' => 'navigation']);
```

**Since**
- 1.0.0

### iconsLists()

A convenience wrapper around the Icons class `iconsList()` method. Retrieves the complete predefined list of icons with their associated properties.

**Note:** There appears to be a naming inconsistency - this helper function is named `iconsLists()` but the class method it calls is `iconsList()`.

**Return**
- Array - An array of associative arrays, where each associative array contains:
  - 'name': The friendly name of the icon
  - 'icon': The identifier of the icon
  - 'category': The category classification of the icon
  - 'type': An array of types (e.g., 'solid', 'regular', 'brands') indicating the styles associated with the icon

**Usage**
```php
$iconsList = iconsLists();

// Each icon in the list has this structure:
// [
//     'name' => 'Home',
//     'icon' => 'home',
//     'category' => 'navigation',
//     'type' => ['solid', 'regular']
// ]
```

**Since**
- 1.0.0

## Icon Types

The package supports three main icon types:

- **solid** - Filled/solid style icons
- **regular** - Outlined/regular style icons  
- **brands** - Brand/logo icons

## Filtering Examples

Here are some practical examples of filtering icons:

```php
// Get all navigation icons
$navIcons = getIcons(['category' => 'navigation']);

// Get all solid icons
$solidIcons = getIcons(['type' => 'solid']);

// Get icons that support multiple types
$multiTypeIcons = getIcons(['type' => ['solid', 'regular']]);

// Combine filters
$solidNavIcons = getIcons([
    'category' => 'navigation',
    'type' => 'solid'
]);
```

## See Also

- [Functions](functions) - Direct class method documentation
- [Usage Examples](usage-examples) - More detailed usage examples
- [Installation](installation) - Getting started guide