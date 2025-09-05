---
title: Usage Examples
---

# Usage Examples

This guide provides practical examples of using the ArtisanPack UI Icons package in various scenarios, including different access methods, filtering options, and integration patterns.

## Basic Usage Examples

### Using Facades

```php
use ArtisanPackUI\Icons\Facades\Icons;

// Get all icons
$allIcons = Icons::getIcons();

// Get complete icon list with metadata
$iconsList = Icons::iconsList();
```

### Using Helper Functions

```php
// Get all icons using helper
$allIcons = getIcons();

// Get complete icon list using helper
$iconsList = iconsLists(); // Note: function name has 's' at the end

// Get Icons service instance
$iconsService = icons();
$allIcons = $iconsService->getIcons();
```

### Using Direct Instantiation

```php
use ArtisanPackUI\Icons\Icons;

$iconsService = new Icons();
$allIcons = $iconsService->getIcons();
```

## Filtering Examples

### Filter by Icon Type

```php
// Get solid icons only
$solidIcons = getIcons(['type' => 'solid']);

// Get regular icons only
$regularIcons = getIcons(['type' => 'regular']);

// Get brand icons only
$brandIcons = getIcons(['type' => 'brands']);

// Get icons that support multiple types
$multiTypeIcons = getIcons(['type' => ['solid', 'regular']]);
```

### Filter by Category

```php
// Get navigation icons
$navIcons = getIcons(['category' => 'navigation']);

// Get social media icons
$socialIcons = getIcons(['category' => 'social']);

// Get utility icons
$utilityIcons = getIcons(['category' => 'utility']);
```

### Combine Multiple Filters

```php
// Get solid navigation icons
$solidNavIcons = getIcons([
    'category' => 'navigation',
    'type' => 'solid'
]);

// Get regular social icons
$regularSocialIcons = getIcons([
    'category' => 'social',
    'type' => 'regular'
]);

// Get icons from multiple categories with specific type
$multiCategoryIcons = getIcons([
    'category' => ['navigation', 'utility'],
    'type' => 'solid'
]);
```

## Blade Template Examples

### Including Icon Styles

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Application</title>
    
    @apIcons
    
    <style>
        .icon-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
            padding: 2rem;
        }
        
        .icon-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="icon-grid">
        @foreach($icons as $icon)
            <div class="icon-item">
                <x-icon-{{ $icon['icon'] }} class="w-5 h-5" />
                <span>{{ $icon['name'] }}</span>
            </div>
        @endforeach
    </div>
</body>
</html>
```

### Icon Component Usage

```blade
<!-- Basic icon usage -->
<x-icon-home />
<x-icon-user />
<x-icon-settings />

<!-- With CSS classes -->
<x-icon-heart class="text-red-500 w-6 h-6" />
<x-icon-star class="text-yellow-400 w-4 h-4" />

<!-- With custom attributes -->
<x-icon-info id="help-icon" data-tooltip="Click for help" />

<!-- In buttons -->
<button class="flex items-center gap-2">
    <x-icon-plus class="w-4 h-4" />
    Add Item
</button>

<!-- In navigation -->
<nav class="flex space-x-4">
    <a href="/home" class="flex items-center gap-2">
        <x-icon-home class="w-5 h-5" />
        Home
    </a>
    <a href="/profile" class="flex items-center gap-2">
        <x-icon-user class="w-5 h-5" />
        Profile
    </a>
</nav>
```

## Controller Examples

### Basic Controller Usage

```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ArtisanPackUI\Icons\Facades\Icons;

class IconController extends Controller
{
    public function index()
    {
        $allIcons = Icons::getIcons();
        
        return view('icons.index', compact('allIcons'));
    }
    
    public function byType($type)
    {
        $icons = Icons::getIcons(['type' => $type]);
        
        return view('icons.by-type', [
            'icons' => $icons,
            'type' => $type
        ]);
    }
    
    public function search(Request $request)
    {
        $category = $request->get('category');
        $type = $request->get('type');
        
        $filters = array_filter([
            'category' => $category,
            'type' => $type
        ]);
        
        $icons = Icons::getIcons($filters);
        
        return response()->json($icons);
    }
}
```

### Using Helper Functions in Controllers

```php
<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Get navigation icons for sidebar
        $navIcons = getIcons(['category' => 'navigation']);
        
        // Get solid icons for main actions
        $actionIcons = getIcons(['type' => 'solid']);
        
        return view('dashboard', [
            'navIcons' => $navIcons,
            'actionIcons' => $actionIcons
        ]);
    }
}
```

## API Usage Examples

### Creating an Icons API

```php
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IconsApiController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->only(['category', 'type', 'name']);
        $icons = getIcons(array_filter($filters));
        
        return response()->json([
            'data' => $icons,
            'count' => count($icons)
        ]);
    }
    
    public function types()
    {
        return response()->json([
            'types' => ['solid', 'regular', 'brands']
        ]);
    }
    
    public function categories()
    {
        $allIcons = iconsLists();
        $categories = array_unique(array_column($allIcons, 'category'));
        
        return response()->json([
            'categories' => array_values($categories)
        ]);
    }
}
```

## Advanced Usage Examples

### Creating a Custom Icon Picker Component

```php
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IconPicker extends Component
{
    public $selectedIcon;
    public $category;
    public $type;
    
    public function __construct($selectedIcon = null, $category = null, $type = null)
    {
        $this->selectedIcon = $selectedIcon;
        $this->category = $category;
        $this->type = $type;
    }
    
    public function render()
    {
        $filters = array_filter([
            'category' => $this->category,
            'type' => $this->type
        ]);
        
        $icons = getIcons($filters);
        
        return view('components.icon-picker', [
            'icons' => $icons,
            'selectedIcon' => $this->selectedIcon
        ]);
    }
}
```

```blade
<!-- resources/views/components/icon-picker.blade.php -->
<div class="icon-picker">
    <div class="grid grid-cols-8 gap-2 max-h-64 overflow-y-auto">
        @foreach($icons as $icon)
            <button 
                type="button"
                class="p-2 border rounded hover:bg-gray-100 @if($selectedIcon === $icon['icon']) bg-blue-100 border-blue-500 @endif"
                onclick="selectIcon('{{ $icon['icon'] }}', '{{ $icon['name'] }}')"
            >
                <x-icon-{{ $icon['icon'] }} class="w-6 h-6 mx-auto" />
                <div class="text-xs mt-1">{{ $icon['name'] }}</div>
            </button>
        @endforeach
    </div>
</div>
```

### Performance Optimization Example

```php
<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;

class IconService
{
    public function getCachedIcons($filters = [])
    {
        $cacheKey = 'icons_' . md5(serialize($filters));
        
        return Cache::remember($cacheKey, 3600, function () use ($filters) {
            return getIcons($filters);
        });
    }
    
    public function getIconsByCategory($category)
    {
        return $this->getCachedIcons(['category' => $category]);
    }
    
    public function getIconsByType($type)
    {
        return $this->getCachedIcons(['type' => $type]);
    }
}
```

## Testing Examples

### Feature Tests

```php
<?php

namespace Tests\Feature;

use Tests\TestCase;
use ArtisanPackUI\Icons\Icons;

class IconsTest extends TestCase
{
    public function test_can_get_all_icons()
    {
        $icons = getIcons();
        
        $this->assertIsArray($icons);
        $this->assertNotEmpty($icons);
    }
    
    public function test_can_filter_icons_by_type()
    {
        $solidIcons = getIcons(['type' => 'solid']);
        
        $this->assertIsArray($solidIcons);
        
        foreach ($solidIcons as $icon) {
            $this->assertContains('solid', $icon['type']);
        }
    }
    
    public function test_icons_api_endpoint()
    {
        $response = $this->get('/api/icons');
        
        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'data' => [
                         '*' => ['name', 'icon', 'category', 'type']
                     ],
                     'count'
                 ]);
    }
}
```

## Error Handling Examples

```php
<?php

try {
    $icons = getIcons(['type' => 'invalid-type']);
} catch (\Exception $e) {
    // Handle error gracefully
    $icons = [];
    \Log::warning('Invalid icon type requested', ['type' => 'invalid-type']);
}

// Validate filter parameters
$validTypes = ['solid', 'regular', 'brands'];
$requestedType = $request->get('type');

if ($requestedType && !in_array($requestedType, $validTypes)) {
    return response()->json(['error' => 'Invalid icon type'], 400);
}

$icons = getIcons(['type' => $requestedType]);
```

## See Also

- [Functions](functions) - Complete function reference
- [Helper Functions](helper-functions) - Global helper function details
- [Blade Directives](blade-directives) - Template integration
- [Installation](installation) - Getting started guide