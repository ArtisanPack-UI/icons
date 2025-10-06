---
title: Usage Examples
---

# Usage Examples

This guide provides practical examples of using the ArtisanPack UI Icons package in various scenarios. Learn how to integrate custom icon sets, work with different icon libraries, and use icons effectively in your Laravel applications.

## Basic Icon Usage

### Simple Icon Display

```blade
{{-- Basic icon usage --}}
<x-icon-fa-home class="w-6 h-6" />
<x-icon-hero-bell class="w-5 h-5" />
<x-icon-custom-logo class="w-8 h-8" />

{{-- With colors and styling --}}
<x-icon-fa-user class="w-5 h-5 text-blue-500" />
<x-icon-hero-calendar class="w-6 h-6 text-green-600" />
<x-icon-custom-brand class="w-10 h-10 text-purple-500" />
```

### Dynamic Icon Selection

```blade
{{-- Using variables --}}
@php
    $iconName = 'fa-home';
    $iconClass = 'w-6 h-6 text-gray-600';
@endphp

<x-dynamic-component :component="'icon-' . $iconName" :class="$iconClass" />

{{-- Loop through icons --}}
@php
    $navIcons = ['fa-home', 'fa-user', 'fa-settings', 'fa-bell'];
@endphp

<nav class="flex space-x-4">
    @foreach($navIcons as $icon)
        <a href="#" class="p-2">
            <x-dynamic-component :component="'icon-' . $icon" class="w-5 h-5" />
        </a>
    @endforeach
</nav>
```

## Real-World Implementation Examples

### Navigation Menu

```blade
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <div class="flex space-x-8">
                <a href="/dashboard" class="flex items-center px-1 pt-1 text-gray-900">
                    <x-icon-hero-home class="w-5 h-5 mr-2" />
                    Dashboard
                </a>
                
                <a href="/users" class="flex items-center px-1 pt-1 text-gray-500">
                    <x-icon-fa-users class="w-5 h-5 mr-2" />
                    Users
                </a>
                
                <a href="/settings" class="flex items-center px-1 pt-1 text-gray-500">
                    <x-icon-fa-cog class="w-5 h-5 mr-2" />
                    Settings
                </a>
            </div>
        </div>
    </div>
</nav>
```

### Button Components with Icons

```blade
{{-- Primary button with icon --}}
<button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex items-center">
    <x-icon-fa-plus class="w-4 h-4 mr-2" />
    Add New User
</button>

{{-- Icon-only button --}}
<button class="p-2 text-gray-400 hover:text-gray-600">
    <x-icon-hero-trash class="w-5 h-5" />
    <span class="sr-only">Delete</span>
</button>

{{-- Loading state --}}
<button class="bg-gray-600 text-white font-bold py-2 px-4 rounded flex items-center" disabled>
    <x-icon-hero-refresh class="w-4 h-4 mr-2 animate-spin" />
    Processing...
</button>
```

### Data Tables with Actions

```blade
<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left">
                <span class="flex items-center">
                    Name
                    <x-icon-hero-chevron-up-down class="w-4 h-4 ml-1 text-gray-400" />
                </span>
            </th>
            <th class="px-6 py-3 text-left">Email</th>
            <th class="px-6 py-3 text-left">Actions</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        @foreach($users as $user)
        <tr>
            <td class="px-6 py-4">
                <div class="flex items-center">
                    <x-icon-fa-user class="w-5 h-5 text-gray-400 mr-3" />
                    {{ $user->name }}
                </div>
            </td>
            <td class="px-6 py-4">{{ $user->email }}</td>
            <td class="px-6 py-4">
                <div class="flex space-x-2">
                    <button class="text-blue-600 hover:text-blue-900">
                        <x-icon-hero-pencil class="w-4 h-4" />
                    </button>
                    <button class="text-red-600 hover:text-red-900">
                        <x-icon-hero-trash class="w-4 h-4" />
                    </button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
```

### Form Elements with Icons

```blade
<form class="space-y-6">
    {{-- Input with icon --}}
    <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <x-icon-hero-user class="h-5 w-5 text-gray-400" />
        </div>
        <input type="text" class="pl-10 block w-full border-gray-300 rounded-md" placeholder="Username">
    </div>
    
    {{-- Password field --}}
    <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <x-icon-hero-lock-closed class="h-5 w-5 text-gray-400" />
        </div>
        <input type="password" class="pl-10 block w-full border-gray-300 rounded-md" placeholder="Password">
    </div>
    
    {{-- Submit button --}}
    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700">
        <x-icon-hero-arrow-right class="w-4 h-4 mr-2" />
        Sign In
    </button>
</form>
```

### Alert Messages

```blade
{{-- Success alert --}}
<div class="bg-green-50 border border-green-200 rounded-md p-4">
    <div class="flex">
        <x-icon-hero-check-circle class="w-5 h-5 text-green-400" />
        <div class="ml-3">
            <p class="text-sm text-green-800">Successfully saved!</p>
        </div>
    </div>
</div>

{{-- Error alert --}}
<div class="bg-red-50 border border-red-200 rounded-md p-4">
    <div class="flex">
        <x-icon-hero-x-circle class="w-5 h-5 text-red-400" />
        <div class="ml-3">
            <p class="text-sm text-red-800">Something went wrong.</p>
        </div>
    </div>
</div>

{{-- Warning alert --}}
<div class="bg-yellow-50 border border-yellow-200 rounded-md p-4">
    <div class="flex">
        <x-icon-hero-exclamation-triangle class="w-5 h-5 text-yellow-400" />
        <div class="ml-3">
            <p class="text-sm text-yellow-800">Please review your settings.</p>
        </div>
    </div>
</div>
```

## Advanced Usage Patterns

### Conditional Icon Display

```blade
{{-- Status indicators --}}
@switch($user->status)
    @case('active')
        <span class="flex items-center text-green-600">
            <x-icon-hero-check-circle class="w-4 h-4 mr-1" />
            Active
        </span>
        @break
    @case('pending')
        <span class="flex items-center text-yellow-600">
            <x-icon-hero-clock class="w-4 h-4 mr-1" />
            Pending
        </span>
        @break
    @case('inactive')
        <span class="flex items-center text-red-600">
            <x-icon-hero-x-circle class="w-4 h-4 mr-1" />
            Inactive
        </span>
        @break
@endswitch

{{-- File type icons --}}
@php
    $fileExtension = pathinfo($file->name, PATHINFO_EXTENSION);
@endphp

@switch($fileExtension)
    @case('pdf')
        <x-icon-fa-file-pdf class="w-6 h-6 text-red-600" />
        @break
    @case('doc')
    @case('docx')
        <x-icon-fa-file-word class="w-6 h-6 text-blue-600" />
        @break
    @case('jpg')
    @case('png')
        <x-icon-fa-file-image class="w-6 h-6 text-green-600" />
        @break
    @default
        <x-icon-fa-file class="w-6 h-6 text-gray-600" />
@endswitch
```

### Icon Grids and Collections

```blade
{{-- Feature grid --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="text-center p-6">
        <x-icon-hero-shield-check class="w-12 h-12 mx-auto text-green-600 mb-4" />
        <h3 class="font-semibold mb-2">Secure</h3>
        <p class="text-gray-600">Your data is protected with enterprise-grade security.</p>
    </div>
    
    <div class="text-center p-6">
        <x-icon-hero-rocket-launch class="w-12 h-12 mx-auto text-blue-600 mb-4" />
        <h3 class="font-semibold mb-2">Fast</h3>
        <p class="text-gray-600">Lightning-fast performance for all your needs.</p>
    </div>
    
    <div class="text-center p-6">
        <x-icon-hero-heart class="w-12 h-12 mx-auto text-red-600 mb-4" />
        <h3 class="font-semibold mb-2">Loved</h3>
        <p class="text-gray-600">Trusted by thousands of satisfied customers.</p>
    </div>
</div>
```

### Social Media Integration

```blade
{{-- Social sharing buttons --}}
<div class="flex space-x-4">
    <a href="#" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded">
        <x-icon-fab-facebook class="w-4 h-4 mr-2" />
        Share
    </a>
    
    <a href="#" class="flex items-center px-4 py-2 bg-blue-400 text-white rounded">
        <x-icon-fab-twitter class="w-4 h-4 mr-2" />
        Tweet
    </a>
    
    <a href="#" class="flex items-center px-4 py-2 bg-blue-700 text-white rounded">
        <x-icon-fab-linkedin class="w-4 h-4 mr-2" />
        Share
    </a>
</div>

{{-- Social profiles --}}
<div class="flex space-x-3">
    @foreach($user->socialProfiles as $profile)
        <a href="{{ $profile->url }}" class="text-gray-400 hover:text-gray-600">
            <x-dynamic-component 
                :component="'icon-fab-' . $profile->platform" 
                class="w-5 h-5" 
            />
        </a>
    @endforeach
</div>
```

## Integration with Livewire Components

### Livewire Button Component

```blade
{{-- resources/views/livewire/icon-button.blade.php --}}
<button 
    wire:click="{{ $action }}"
    class="{{ $class ?? 'bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded' }}"
    @if($loading) disabled @endif
>
    @if($loading)
        <x-icon-hero-refresh class="w-4 h-4 mr-2 animate-spin" />
    @else
        <x-dynamic-component :component="'icon-' . $icon" class="w-4 h-4 mr-2" />
    @endif
    {{ $slot }}
</button>
```

Usage:
```blade
<livewire:icon-button action="save" icon="hero-check" loading="saving">
    Save Changes
</livewire:icon-button>
```

### Search with Icon Feedback

```blade
{{-- Livewire search component --}}
<div class="relative">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        @if($searching)
            <x-icon-hero-refresh class="h-5 w-5 text-gray-400 animate-spin" />
        @else
            <x-icon-hero-magnifying-glass class="h-5 w-5 text-gray-400" />
        @endif
    </div>
    <input 
        type="text" 
        wire:model.live.debounce.300ms="search"
        class="pl-10 block w-full border-gray-300 rounded-md" 
        placeholder="Search..."
    >
</div>
```

## Performance Considerations

### Lazy Loading Icons

```blade
{{-- Only load icons when needed --}}
@if($showIcons)
    <div class="icon-grid">
        @foreach($items as $item)
            <x-icon-fa-{{ $item->icon }} class="w-6 h-6" />
        @endforeach
    </div>
@endif

{{-- Conditional icon loading --}}
@once
    @if($needsIcons)
        @push('head')
            {{-- Any additional icon-related styles --}}
        @endpush
    @endif
@endonce
```

### Icon Caching Strategies

```blade
{{-- Cache frequently used icon combinations --}}
@php
    $cacheKey = 'nav_icons_' . auth()->user()->role;
    $navIcons = cache()->remember($cacheKey, 3600, function () {
        return collect(['home', 'users', 'settings'])->map(function ($icon) {
            return (object) ['name' => $icon, 'component' => 'icon-fa-' . $icon];
        });
    });
@endphp

@foreach($navIcons as $icon)
    <x-dynamic-component :component="$icon->component" class="w-5 h-5" />
@endforeach
```

## Next Steps

- Explore [Extension API](extension-api.md) for programmatic icon registration
- Review [Architecture Overview](architecture.md) to understand the underlying system
- Check [Migration Guide](migration.md) if upgrading from v1.x
- Learn about [Service Provider](service-provider.md) integration details