<?php

namespace Digitalshopfront\Icons;

use Illuminate\Support\ServiceProvider;

class IconsServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->singleton( 'icons', function ( $app ) {
            return new Icons();
        } );
    }
}
