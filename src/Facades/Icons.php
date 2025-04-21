<?php

namespace Digitalshopfront\Icons\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Digitalshopfront\Icons\Icons
 */
class Icons extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'icons';
    }
}
