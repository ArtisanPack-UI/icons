---
title: AI Guidelines
---

# AI Guidelines

## Icons (artisanpack-ui-icons)

**Primary Goal:** To promote the efficient and consistent use of SVG icons within Blade views.

### Core Principles for the AI:

**Component-Based:** Use the Blade component syntax for rendering icons to ensure consistency and readability.

**Performance:** Be mindful of performance by leveraging the package's caching mechanism.

**Customization:** Allow for easy customization of icons through component attributes.

### Specific Instructions for the AI:

When adding an icon to a Blade view, use the `<x-icon-[name] />` syntax provided by the package.

If a user requests a custom icon, generate the SVG file and provide instructions on how to register it as a custom icon set in the package's configuration file.

When generating UI components that include icons, include attributes for customizing the icon's type, category, and CSS class.

Ensure that all icons have appropriate text alternatives for accessibility, either through a title attribute or an associated aria-label.