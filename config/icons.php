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
    | Default Icon Set
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default icon set prefix that should be used
    | by UI components when a prefix is not explicitly provided.
    |
    */
	'default_set' => 'heroicon',

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
        | Example: Heroicons (The Default Set)
        |--------------------------------------------------------------------------
        |
        | To use the default set, uncomment the following lines and place your
        | Heroicon SVG files in the specified path.
        |
        | Usage: <x-artisanpack-icon name="home" />
        |
        */
        // 'heroicon' => [
        //     'path' => resource_path('icons/heroicons'),
        //     'prefix' => 'heroicon',
        // ],

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
        //     'prefix' => 'fas',
		// ],
		// 'far' => [
		//     'path' => resource_path('icons/fontawesome/regular'),
        //     'prefix' => 'far',
		// ],
		// 'fal' => [
		//     'path' => resource_path('icons/fontawesome/light'),
        //     'prefix' => 'fal',
		// ],

	],

];
