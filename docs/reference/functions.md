---
title: Functions
---

# Functions

Here are the icon functions you can use with this package.

## getIcons( $args = [] )

Retrieves a filtered list of icons based on the provided arguments.

**Parameters**

* Array - $args - An associative array of criteria to filter the icons. The keys represent the icon properties, and the values represent the filter conditions. If a value is an array, the method checks for inclusion; otherwise, it checks for equality.

**Return**

* Array - An array of icons that match the specified filtering criteria.

**Since**

* 1.0.0

## iconsList()

Retrieves a predefined list of icons with their associated properties.

Each icon includes details such as the name, icon identifier, category, and supported types.

**Return**

* Array - An array of associative arrays, where each associative array contains:
    * 'name': The friendly name of the icon.
    * 'icon': The identifier of the icon.
    * 'category': The category classification of the icon.
    * 'type': An array of types (e.g., 'solid', 'regular') indicating the styles associated with the icon.

**Since**

* 1.0.0
