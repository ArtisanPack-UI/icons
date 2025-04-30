<?php

use Digitalshopfront\Icons\Icons;

it( 'returns icon array', function () {
	$iconsClass = new Icons();
	$icons      = $iconsClass->getIcons();

	$this->assertIsArray( $icons );
} );

it( 'returns solid icon array', function () {
	$iconsClass = new Icons();
	$icons      = $iconsClass->getIcons( [ 'type' => 'solid' ] );

	$this->assertIsArray( $icons );

	foreach ( $icons as $icon ) {
		$this->assertTrue( in_array( 'solid', $icon['type'] ) );
	}
} );

it( 'returns regular icon array', function () {
	$iconsClass = new Icons();
	$icons      = $iconsClass->getIcons( [ 'type' => 'regular' ] );

	$this->assertIsArray( $icons );

	foreach ( $icons as $icon ) {
		$this->assertTrue( in_array( 'regular', $icon['type'] ) );
	}
} );

it( 'returns brands icon array', function () {
	$iconsClass = new Icons();
	$icons      = $iconsClass->getIcons( [ 'type' => 'brands' ] );

	$this->assertIsArray( $icons );

	foreach ( $icons as $icon ) {
		$this->assertTrue( in_array( 'brands', $icon['type'] ) );
	}
} );
