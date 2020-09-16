<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		
		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );

		//Swiper CSS
		$css_swiper_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/swiper-bundle.min.css');
		wp_enqueue_style( 'swiper-styles', get_stylesheet_directory_uri() . '/css/swiper-bundle.min.css', array(), $css_swiper_version );

		wp_enqueue_script( 'jquery');
		
		$js_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/theme.min.js');
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );

		//Swiper JS
		$js_swiper_version = $theme_version . '.' . filemtime(get_template_directory() . '/js/swiper-bundle.min.js');
		wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), $js_swiper_version, true );

	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );