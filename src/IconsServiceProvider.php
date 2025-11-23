<?php
/**
 * Service provider for the Icons package.
 *
 * This provider handles the registration of icon sets and adds event-driven
 * extensibility to the core Blade Icons system.
 *
 * @link       https://gitlab.com/jacob-martella-web-design/artisanpack-ui/artisanpack-ui-icons
 * @package    ArtisanPackUI\Icons
 * @since      2.0.0
 */

namespace ArtisanPackUI\Icons;

use ArtisanPackUI\Icons\Registries\IconSetRegistration;
use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;
use TorMorten\Eventy\Facades\Eventy;

/**
 * Registers and bootstraps the Icons package services.
 *
 * @since 2.0.0
 */
class IconsServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * This method merges the package's local icon configuration into a temporary key.
	 * The `boot` method will then handle merging this into the main `artisanpack` config.
	 *
	 * @since 2.0.0
	 * @return void
	 */
	public function register(): void
	{
		$this->mergeConfigFrom(
			__DIR__ . '/../config/icons.php', 'artisanpack-icons-temp'
		);
	}

	/**
	 * Bootstrap any application services.
	 *
	 * This method publishes the configuration, merges it into the main `artisanpack`
	 * config array, and registers all icon sets.
	 *
	 * @since 2.0.0
	 * @return void
	 * @throws BindingResolutionException
	 */
	public function boot(): void
	{
		$this->mergeConfiguration();

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
	 * This method ensures that the user's settings under the 'icons' key
	 * in `config/artisanpack.php` take precedence over the package's default values.
	 *
	 * @since 2.0.0
	 * @return void
	 */
	protected function mergeConfiguration(): void
	{
		$packageDefaults = config('artisanpack-icons-temp', []);
		$userConfig = config('artisanpack.icons', []);
		$mergedConfig = array_replace_recursive($packageDefaults, $userConfig);
		config(['artisanpack.icons' => $mergedConfig]);
	}

	/**
	 * Registers icon sets from configuration and events.
	 *
	 * This method merges icon sets defined in the final `artisanpack.icons`
	 * configuration with sets registered by third-party extensions via the
	 * 'ap.icons.register-icon-sets' filter hook.
	 *
	 * @since 2.0.0
	 * @return void
	 * @throws BindingResolutionException
	 */
	protected function registerIconSets(): void
	{
		$this->callAfterResolving(Factory::class, function (Factory $factory) {
			$validatedConfigSets = [];
			// Read icon sets from the final merged configuration.
			$configSets = config('artisanpack.icons.sets', []);
			if (is_array($configSets)) {
				foreach ($configSets as $prefix => $details) {
					// Validation: Ensure the entry is valid before adding it.
					if (! empty($prefix) && ! empty($details['path']) && is_dir($details['path'])) {
						$validatedConfigSets[$prefix] = $details;
					}
				}
			}

			// Get icon sets registered via events.
			$eventRegistry = new IconSetRegistration();
			$eventRegistry = applyFilters('ap.icons.register-icon-sets', $eventRegistry);
			$eventSets = $eventRegistry->getSets();


			// Merge sets, with config taking precedence over events.
			$allSets = array_merge($eventSets, $validatedConfigSets);

			// Register all collected and validated icon sets with the factory.
			foreach ($allSets as $prefix => $details) {
				$factory->add($prefix, $details);
			}
		});
	}
}