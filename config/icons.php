<?php
/**
 * ArtisanPack UI - Icons Configuration
 *
 * This configuration file allows you to register custom icon sets for use
 * with the Blade UI Kit factory. Each icon set requires a 'prefix' and a 'path'.
 *
 * The 'prefix' is used to reference the icon set in Blade components (e.g., <x-icon-fas-user />),
 * and the 'path' is the absolute path to the directory containing the raw SVG files.
 *
 * @link       https://gitlab.com/jacob-martella-web-design/artisanpack-ui/artisanpack-ui-icons
 *
 * @package    ArtisanPackUI\Icons
 * @since      2.0.0
 */
return [

	/*
	|--------------------------------------------------------------------------
	| Icon Sets
	|--------------------------------------------------------------------------
	|
	| Here you can register one or more icon sets. Each set should be defined
	| by a unique key that acts as its prefix. The value should be an array
	| containing the 'path' to the directory of SVG icons.
	|
	*/
	'sets' => [

		/*
		|--------------------------------------------------------------------------
		| Example: Font Awesome Pro
		|--------------------------------------------------------------------------
		|
		| Usage: <x-icon-fas-user />, <x-icon-far-heart />, <x-icon-fal-lightbulb />
		|
		*/
		// 'fas' => [
		//     'path' => resource_path('icons/fontawesome/solid'),
		// ],
		// 'far' => [
		//     'path' => resource_path('icons/fontawesome/regular'),
		// ],
		// 'fal' => [
		//     'path' => resource_path('icons/fontawesome/light'),
		// ],

	],

];