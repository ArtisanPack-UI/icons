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
use TorMorten\Eventy\Facades\Eventy;

class IconsServiceProvider extends ServiceProvider
{

	public function register(): void
	{
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

		$this->registerIconSets();
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

	/**
	 * Registers icon sets from configuration and events.
	 *
	 * This method merges icon sets defined in the configuration file with sets
	 * registered by third-party extensions via the 'ap.icons.register-icon-sets'
	 * filter hook. Sets from the config file will override any event-registered
	 * sets with the same prefix.
	 *
	 * @since 2.0.0
	 *
	 * @return void
	 */
	protected function registerIconSets(): void {
		$this->callAfterResolving( Factory::class, function ( Factory $factory ) {
			$allSets = [];

			// 1. Get and validate icon sets from the local config file.
			$configSets = config( 'artisanpack.icons.sets', [] );
			if ( is_array( $configSets ) ) {
				foreach ( $configSets as $prefix => $details ) {
					// Validation: Ensure the entry is valid before adding it.
					if ( ! empty( $prefix ) && ! empty( $details['path'] ) && is_dir( $details['path'] ) ) {
						$allSets[ $prefix ] = $details;
					}
				}
			}

			// 2. Get icon sets registered via events.
			$eventRegistry = new IconSetRegistration();

			/**
			 * Filters the icon set registry to allow third-party extensions to add icon sets.
			 *
			 * @since 2.0.0
			 *
			 * @param IconSetRegistration $eventRegistry The registry instance for adding icon sets.
			 */
			Eventy::filter( 'ap.icons.register-icon-sets', $eventRegistry );
			$eventSets = $eventRegistry->getSets();

			// 3. Merge sets. Config sets take priority and will overwrite event sets with the same prefix.
			$allSets = array_merge( $eventSets, $allSets );

			// 4. Register all collected and validated icon sets with the Blade Icons factory.
			foreach ( $allSets as $prefix => $details ) {
				$factory->add( $prefix, $details );
			}
		});
	}
}