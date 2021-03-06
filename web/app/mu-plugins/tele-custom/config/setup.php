<?php

	namespace TELE\Common;

	add_filter( 'acf/settings/save_json', __NAMESPACE__ . '\\set_acf_json_save_path' );
	add_filter( 'acf/settings/load_json', __NAMESPACE__ . '\\set_acf_json_load_path' );
	add_filter( 'plugins_loaded', __NAMESPACE__ . '\\initialize_acf_option_pages' );
    add_filter( 'upload_mimes', __NAMESPACE__ . '\\extend_mime_types' );

	function set_acf_json_save_path() {
		return TELE_LIBRARY . 'acf-json';
	}

	function set_acf_json_load_path( $paths ) {
		unset( $paths[ 0 ] );
		// append path
		$paths[] = TELE_LIBRARY . 'acf-json';

		return $paths;
	}

	function extend_mime_types( $mimes ) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}

	function initialize_acf_option_pages() {
		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page( [
				'page_title' => 'Site Settings',
				'menu_title' => 'Site Settings',
				'menu_slug'  => 'site-options',
				'capability' => 'edit_posts',
				'redirect'   => true,
				'position'   => 3,
				'icon_url'   => 'dashicons-admin-generic',
			] );

			/*
			acf_add_options_sub_page( [
				'page_title'  => 'General settings',
				'menu_title'  => 'General',
				'parent_slug' => 'site-options',
				'icon_url'    => 'dashicons-groups',
			] );
			*/

		}
	}
