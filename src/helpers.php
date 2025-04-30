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
    function getIcons( $args = [] ): array
    {
        return icons()->getIcons( $args );
    }
}

if ( !function_exists( 'iconsLists' ) ) {
    function iconsLists(): array
    {
        return icons()->iconsList();
    }
}
