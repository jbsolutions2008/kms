<?php

	namespace TELE\Example;

	add_action( 'init', __NAMESPACE__ . '\\create_cpt' );

	function create_cpt() {

		$labels = [
			'name'               => _x( 'Example', 'post type general name' ),
			'singular_name'      => _x( 'Example', 'post type singular name' ),
			'all_items'          => __( 'Manage Examples' ),
			'add_new'            => _x( 'New Example', 'Example' ),
			'add_new_item'       => __( 'New Example' ),
			'new_item'           => __( 'New Example' ),
			'edit_item'          => __( 'Edit Example' ),
			'view_item'          => __( 'View Example' ),
			'view_items'         => __( 'View Examples' ),
			'search_items'       => __( 'Search Examples' ),
			'not_found'          => __( 'No Examples found' ),
			'not_found_in_trash' => __( 'No Examples found in Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Examples',
		];

		$args = [
			'labels'              => $labels,
			'description'         => 'Product',
			'public'              => true,
			'menu_position'       => 5,
			'capability_type'     => 'post',
			'hierarchical'        => false,
			'has_archive'         => false,
			'supports'            => [ 'title', 'thumbnail' ],
			'can_export'          => true,
			'show_in_nav_menus'   => false,
			'exclude_from_search' => true,
			'publicly_queryable'  => false,
			'menu_icon'           => 'dashicons-megaphone'
		];

		register_post_type( TELE_CPT_EXAMPLE, $args );
	}
