<?php
/**
 * Icon Set Registration handler.
 *
 * Provides a structured API for third-party extensions to register icon sets
 * via the 'artisanpack-ui-icons.register-icon-sets' filter hook.
 *
 * @link       https://gitlab.com/jacob-martella-web-design/artisanpack-ui/artisanpack-ui-icons
 *
 * @package    ArtisanPackUI\Icons
 * @subpackage ArtisanPackUI\Icons\Registries
 * @since      2.0.0
 */

namespace ArtisanPackUI\Icons\Registries;

use InvalidArgumentException;

/**
 * Manages the registration of custom icon sets.
 *
 * This class offers a fluent interface for adding icon sets, ensuring that
 * required parameters like path and prefix are validated before registration.
 * An instance of this class is passed through the Eventy filter.
 *
 * @since 2.0.0
 */
class IconSetRegistration {

	/**
	 * Holds the array of icon sets to be registered.
	 *
	 * @since 2.0.0
	 * @var   array
	 */
	protected array $sets = [];

	/**
	 * Registers a single icon set.
	 *
	 * Validates that the provided path is a valid directory and that the prefix is not empty.
	 * Throws an exception if validation fails.
	 *
	 * @since 2.0.0
	 *
	 * @param string $path   The absolute path to the directory containing the SVG icons.
	 * @param string $prefix The prefix to use for the icon set (e.g., 'fas', 'pro-light').
	 * @return self
	 *
	 * @throws InvalidArgumentException If the path is not a directory or the prefix is empty.
	 */
	public function addSet( string $path, string $prefix ): self
	{
		if ( empty( $prefix ) ) {
			throw new InvalidArgumentException( 'Icon set prefix cannot be empty.' );
		}

		if ( ! is_dir( $path ) ) {
			throw new InvalidArgumentException( "Icon set path is not a valid directory: {$path}" );
		}

		$this->sets[ $prefix ] = [ 'path' => $path ];
		return $this;
	}

	/**
	 * Registers multiple icon sets from an associative array.
	 *
	 * Iterates over an array of sets and registers them using the addSet() method,
	 * leveraging its validation logic.
	 *
	 * @since 2.0.0
	 *
	 * @param array $sets An associative array of icon sets, where the key is the prefix
	 * and the value is an array containing the 'path'.
	 * @return self
	 */
	public function addSets( array $sets ): self
	{
		foreach ( $sets as $prefix => $details ) {
			if ( isset( $details['path'] ) ) {
				$this->addSet( $details['path'], $prefix );
			}
		}
		return $this;
	}

	/**
	 * Retrieves all registered icon sets.
	 *
	 * @since 2.0.0
	 *
	 * @return array The array of validated icon sets.
	 */
	public function getSets(): array
	{
		return $this->sets;
	}
}