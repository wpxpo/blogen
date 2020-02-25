<?php
/**
 * Theme functions and definitions
 * @package Blogen
*/
defined('ABSPATH') || exit;

define( 'BLOGEN_VERSION', '1.0.8' );
define( 'BLOGEN_URI', get_template_directory_uri() );
define( 'BLOGEN_DIR', get_stylesheet_directory() );

// Custom template tags for this theme.
require_once get_parent_theme_file_path( '/inc/template-tags.php' );

// Customizer additions.
require_once get_parent_theme_file_path( '/inc/customizer.php' );

// Functions which enhance the theme by hooking into WordPress.
require_once get_parent_theme_file_path( '/inc/template-functions.php' );

// tgm plugin
require_once get_parent_theme_file_path( '/inc/class-tgm-plugin-activation.php' );

// Add Widget
require_once get_parent_theme_file_path( '/inc/widget/latest-posts.php' );

// Add admin dashboard
require_once get_parent_theme_file_path( '/inc/admin-settings.php' );

// Metabox
require_once get_parent_theme_file_path( '/inc/metabox/metabox.php' );

// Customizer
require_once get_parent_theme_file_path( '/inc/customizer/Customizer.php' );