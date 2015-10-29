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

// Add your own footer and center it like bootstrap
add_filter( 'genesis_footer_output', 'bsg_footer_creds_filter', 10, 3 );
function bsg_footer_creds_filter( $creds ) {
	$creds = '<p class="text-centered">[footer_copyright] &middot; <a href="'. esc_url( home_url( '/' ) ) .'">'. get_bloginfo( 'name' ) .'</a></p>';
	return $creds;
}

/*
add_action('genesis_footer', 'bsg_footer_extened');
function bsg_footer_extened() {
?>

<?php
}
// */
