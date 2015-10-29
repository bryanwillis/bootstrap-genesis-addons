<?php

/* Copy desired addons to bootstrap-genesis-adddons/addons/functions.php */
/* Use filenames without .php in the bootstrap-genesis/addons/ folder as theme support varialbe/option name and prefix with bsg */
/* add_theme_support ('bsg-filename-without-php-extension') */

// Customizer Logo 
add_theme_support('bsg-customizer-logo');
// Customizer Widget Columns
add_theme_support('bsg-grid-classes');
// Custom CSS File
add_theme_support('bsg-custom-css');
// Add advanced-custom-fields
add_theme_support('bsg-acf');
// Add mu-plugin auto loader
add_theme_support('mu-plugin-autoloader');
// Add Kirki Customizer Toolkit
add_theme_support('kirki');





/* Specific to Bootstrap Genesis */

// remove_action('genesis_footer', 'genesis_do_footer');
add_filter('genesis_footer_creds_text', 'bsg_addons_footer_creds_filter');
function bsg_addons_footer_creds_filter( $creds ) {
	$creds = '[footer_copyright] &middot; <a href="'. esc_url( home_url( '/' ) ) .'">'. get_bloginfo( 'name' ) .'</a>';
	return $creds;
}

