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
	function getIcons(): array
	{
		return icons()->getIcons();
	}
}

if ( !function_exists( 'iconsLists' ) ) {
	function iconsLists(): array
	{
		return icons()->iconsList();
	}
}
