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

/**
 * Registers and bootstraps the Icons package.
 *
 * @since 2.0.0
 */
class IconsServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @since 2.0.0
	 *
	 * @return void
	 */
	public function boot(): void {
		$this->registerIconSets();
	}

	/**
	 * Registers icon sets from configuration and events.
	 *
	 * This method merges icon sets defined in the configuration file with sets
	 * registered by third-party extensions via the 'artisanpack-ui-icons.register-icon-sets'
	 * filter hook. Sets from the config file will override any event-registered
	 * sets with the same prefix.
	 *
	 * @since 2.0.0
	 *
	 * @return void
	 */
	protected function registerIconSets(): void {
		$this->callAfterResolving( Factory::class, function ( Factory $factory ) {
			// 1. Get icon sets registered via events.
			$eventRegistry = new IconSetRegistration();

			/**
			 * Filters the icon set registry to allow third-party extensions to add icon sets.
			 *
			 * @since 2.0.0
			 *
			 * @param IconSetRegistration $eventRegistry The registry instance for adding icon sets.
			 */
			Eventy::filter( 'artisanpack-ui-icons.register-icon-sets', $eventRegistry );
			$eventSets = $eventRegistry->getSets();

			// 2. Get icon sets from the local config file.
			$configSets = config( 'artisanpack-ui-icons.sets', [] );

			// 3. Merge sets. Config sets take priority and will overwrite event sets with the same prefix.
			$allSets = array_merge( $eventSets, $configSets );

			// 4. Register all collected icon sets with the Blade Icons factory.
			foreach ( $allSets as $prefix => $details ) {
				if ( isset( $details['path'] ) ) {
					$factory->add( $prefix, $details );
				}
			}
		});
	}
}