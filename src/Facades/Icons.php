<?php

namespace ArtisanPackUI\Icons\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ArtisanPackUI\Icons\Icons
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
