<?php
/**
 * Service provider for the Icons package.
 *
 * @link       https://gitlab.com/jacob-martella-web-design/artisanpack-ui/artisanpack-ui-icons
 *
 * @package    ArtisanPackUI\Icons
 * @subpackage ArtisanPackUI\Icons\IconsServiceProvider
 * @since      2.0.0
 */

namespace ArtisanPackUI\Icons;

use ArtisanPackUI\Icons\Registries\IconSetRegistration;
use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class IconsServiceProvider extends ServiceProvider
{

	public function register(): void
	{
		$this->app->singleton( 'icons', function ( $app ) {
			return new Icons();
		} );

		$this->mergeConfigFrom(
			__DIR__ . '/../config/icons.php', 'artisanpack-icons-temp'
		);
	}

	public function boot(): void
	{
		$this->mergeConfiguration();

		// 2. Tag the config file for the scaffold command.
		if ($this->app->runningInConsole()) {
			$this->publishes([
								 __DIR__ . '/../config/icons.php' => config_path('artisanpack/icons.php'),
							 ], 'artisanpack-package-config');
		}
	}

	/**
	 * Merges the package's default configuration with the user's customizations.
	 *
	 * This method ensures that the user's settings in `config/artisanpack.php`
	 * take precedence over the package's default values.
	 *
	 * @since 2.0.0
	 * @return void
	 */
	protected function mergeConfiguration(): void
	{
		// Get the package's default configuration.
		$packageDefaults = config('artisanpack-icons-temp', []);

		// Get the user's custom configuration from config/artisanpack.php.
		$userConfig = config('artisanpack.icons', []);

		// Merge them, with the user's config overwriting the defaults.
		$mergedConfig = array_replace_recursive($packageDefaults, $userConfig);

		// Set the final, correctly merged configuration.
		config(['artisanpack.icons' => $mergedConfig]);
	}
}