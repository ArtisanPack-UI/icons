<?php

namespace Tests;

use ArtisanPackUI\Icons\IconsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use TorMorten\Eventy\EventServiceProvider;
use TorMorten\Eventy\Facades\Eventy;

class TestCase extends Orchestra
{
	protected function getPackageProviders( $app )
	{
		return [
			IconsServiceProvider::class,
			EventServiceProvider::class,
		];
	}
}
