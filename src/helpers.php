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
