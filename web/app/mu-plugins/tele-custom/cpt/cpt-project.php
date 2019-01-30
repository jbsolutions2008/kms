<?php

	namespace TELE\Project;

	add_action( 'init', __NAMESPACE__ . '\\create_cpt' );

	function create_cpt() {

		$labels = [
			'name'               => _x( 'Project', 'post type general name' ),
			'singular_name'      => _x( 'Project', 'post type singular name' ),
			'all_items'          => __( 'Manage Projects' ),
			'add_new'            => _x( 'New Project', 'Project' ),
			'add_new_item'       => __( 'New Project' ),
			'new_item'           => __( 'New Project' ),
			'edit_item'          => __( 'Edit Project' ),
			'view_item'          => __( 'View Project' ),
			'view_items'         => __( 'View Projects' ),
			'search_items'       => __( 'Search Projects' ),
			'not_found'          => __( 'No Projects found' ),
			'not_found_in_trash' => __( 'No Projects found in Trash' ),
			'parent_item_colon'  => '',
			'menu_name'          => 'Projects',
		];

		$args = [
			'labels'              => $labels,
			'description'         => 'Project',
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
			'menu_icon'           => 'dashicons-hammer'
		];

		register_post_type( TELE_CPT_PROJECT, $args );
	}
