<?php

test( 'can load css file', function () {
    $response = $this->get( '/digital-shopfront-package-assets/digitalshopfront/icons/dist/css/all.css' );

    $response->assertStatus( 200 );
} );
