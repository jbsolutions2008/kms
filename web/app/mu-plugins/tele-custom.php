<?php

	/*
	 * Plugin name: Telegraph Creative custom site functions
	 * Description: Add custom fields to site and setup all CPTs, etc.
	 * Author: Telegraph Creative
	 * Version: 1.0
	 */

	/**
	 * Initializing function.
	 */
	function tele_initialize_all() {
		require_once( dirname( __FILE__ ) . '/tele-custom/index.php' );
	}
	
	tele_initialize_all();