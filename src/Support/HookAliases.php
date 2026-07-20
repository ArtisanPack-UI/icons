<?php

/**
 * Hook alias registrations for the Icons package.
 *
 * Registers backwards-compatibility aliases for hooks that have been renamed.
 * Subscribers on the old name continue firing but emit an info-level
 * deprecation log via `HookDeprecations`. Alias removal is deferred to the
 * next major release.
 *
 * @link       https://gitlab.com/jacob-martella-web-design/artisanpack-ui/artisanpack-ui-icons
 * @since      2.2.0
 */

namespace ArtisanPackUI\Icons\Support;

/**
 * Registers deprecated hook aliases for the Icons package.
 *
 * @since 2.2.0
 */
class HookAliases
{
    /**
     * Register all deprecated hook aliases.
     *
     * @since 2.2.0
     */
    public static function register(): void
    {
        deprecateHook('ap.icons.register-icon-sets', 'ap.icons.registerIconSets');
    }
}
