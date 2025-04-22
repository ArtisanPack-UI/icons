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
        $this->publishes( [
            __DIR__ . '../dist/css/all.css' => public_path( 'vendor/digitalshopfront/icons' ),
        ], 'public' );

        Blade::directive( 'dsIcons', function ( $expression ) {
            return '<link href="' . asset( 'vendor/digitalshopfront/icons' ) . '" rel="stylesheet">';
        } );
    }
}
