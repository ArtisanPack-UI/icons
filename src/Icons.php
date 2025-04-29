<?php

namespace Digitalshopfront\Icons;

use TorMorten\Eventy\Facades\Eventy;

class Icons
{

	public function getIcons( $args = [] ): array
	{
		$icons = $this->iconsList();

		if ( !empty( $args ) ) {
			foreach ( $args as $key => $arg ) {
				$icons = array_filter( $icons, function ( $icon ) use ( $arg, $key ) {
					return in_array( $icon[ $key ], $arg ) || $icon[ $key ] === $arg;
				} );
			}
		}

		return $icons;
	}

	public function iconsList(): array
	{
		$icons = [];

		return Eventy::filter( 'ds.icons.iconsList', $icons );
	}

}
