<?php
/*
Plugin Name: WP Swagger
Plugin URI: http://antonioortegajr.com
Description: This plugin creates a Swagger UI instance in WordPress.
Version: 1.0.0
Author: Antonio Ortega Jr
Author URI: http://antonioortegajr.com
License: GPL2
*/

add_action( 'admin_menu', 'wp_swagger_add_admin_menu' );
add_action( 'admin_init', 'wp_swagger_settings_init' );
function wp_swagger_add_admin_menu(  ) {
	add_options_page( 'wp_swagger_profile', 'wp_swagger_profile', 'manage_options', 'wp_swagger_profile', 'wp_swagger_profile_options_page' );
}
function wp_swagger_settings_init(  ) {
	register_setting( 'pluginPage', 'wp_swagger_settings' );
	add_settings_section(
		'wp_swagger_pluginPage_section',
		__( 'Your section description', 'wordpress' ),
		'wp_swagger_settings_section_callback',
		'pluginPage'
	);
}
function wp_swagger_profile_options_page(){
include 'swagger_ui/index.php';
}


?>
