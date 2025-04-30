<?php

use Digitalshopfront\Icons\Icons;

if ( !function_exists( 'icons' ) ) {
    /**
     * Get the Eventy instance.
     *
     * @return Icons
     */
    function icons()
    {
        return app( 'icons' );
    }
}

if ( !function_exists( 'getIcons' ) ) {
    /**
     * Retrieves a filtered list of icons based on the provided arguments.
     *
     * @param array $args An associative array of criteria to filter the icons.
     *                    The keys represent the icon properties, and the values
     *                    represent the filter conditions. If a value is an array,
     *                    the method checks for inclusion; otherwise, it checks for equality.
     * @return array An array of icons that match the specified filtering criteria.
     * @since 1.0.0
     */
    function getIcons( $args = [] ): array
    {
        return icons()->getIcons( $args );
    }
}

if ( !function_exists( 'iconsLists' ) ) {
    /**
     * Retrieves a predefined list of icons with their associated properties.
     * Each icon includes details such as the name, icon identifier, category,
     * and supported types.
     *
     * @return array An array of associative arrays, where each associative array contains:
     *               - 'name': The friendly name of the icon.
     *               - 'icon': The identifier of the icon.
     *               - 'category': The category classification of the icon.
     *               - 'type': An array of types (e.g., 'solid', 'regular') indicating the styles associated with the icon.
     * @since 1.0.0
     */
    function iconsLists(): array
    {
        return icons()->iconsList();
    }
}
