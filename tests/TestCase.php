<?php

namespace Tests;

use ArtisanPackUI\Icons\IconsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
	protected function getPackageProviders( $app )
	{
		return [
			IconsServiceProvider::class,
		];
	}
}
