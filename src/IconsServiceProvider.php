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
            __DIR__ . '/../dist/css/all.css'                       => public_path( 'vendor/digitalshopfront/icons/css/all.css' ),
            __DIR__ . '/../dist/webfonts/fa-brands-400.ttf'        => public_path( 'vendor/digitalshopfront/icons/webfonts/fa-brands-400.ttf' ),
            __DIR__ . '/../dist/webfonts/fa-brands-400.woff2'      => public_path( 'vendor/digitalshopfront/icons/webfonts/fa-brands-400.woff2' ),
            __DIR__ . '/../dist/webfonts/fa-regular-400.ttf'       => public_path( 'vendor/digitalshopfront/icons/webfonts/fa-regular-400.ttf' ),
            __DIR__ . '/../dist/webfonts/fa-regular-400.woff2'     => public_path( 'vendor/digitalshopfront/icons/webfonts/fa-regular-400.woff2' ),
            __DIR__ . '/../dist/webfonts/fa-solid-900.ttf'         => public_path( 'vendor/digitalshopfront/icons/webfonts/fa-solid-400.ttf' ),
            __DIR__ . '/../dist/webfonts/fa-solid-900.woff2'       => public_path( 'vendor/digitalshopfront/icons/webfonts/fa-solid-900.woff2' ),
            __DIR__ . '/../dist/webfonts/fa-v4compatibility.ttf'   => public_path( 'vendor/digitalshopfront/icons/webfonts/fa-v4compatibility.ttf' ),
            __DIR__ . '/../dist/webfonts/fa-v4compatibility.woff2' => public_path( 'vendor/digitalshopfront/icons/webfonts/fa-v4compatibility.woff2' ),
        ], 'public' );

        Blade::directive( 'dsIcons', function ( $expression ) {
            return '<link href="' . asset( 'vendor/digitalshopfront/icons/css/all.css' ) . '" rel="stylesheet">';
        } );
    }
}
