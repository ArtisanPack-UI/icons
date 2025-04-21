<?php

namespace Digitalshopfront\Icons;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class IconsServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->singleton( 'icons', function ( $app ) {
            return new Icons();
        } );
    }

    public function boot(): void
    {
        Blade::directive( 'dsIcons', function ( $expression ) {
            return '<link rel="stylesheet" href="/vendor/digital-shopfront/icons/dist/css/all.css">';
        } );
    }
}
