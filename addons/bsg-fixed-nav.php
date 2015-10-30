<?php

// Version of Fixed Nav from - https://github.com/salcode/bootstrap-genesis-fixed-nav

if (!class_exists('Bootstrap_Genesis_Fixed_Nav')) {
class Bootstrap_Genesis_Fixed_Nav {

	public function __construct() {
		add_filter( 'bsg-classes-to-add', array( $this, 'modify_nav_class' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'load_css' ) );
		add_filter( 'genesis_markup_nav-primary_output',  array( $this, 'add_boot_strap_affix_markup' ) );
		add_filter( 'option_hash_link_scroll_offset', array( $this, 'option_hash_link_scroll_offset' ) );
		add_filter( 'body_class', array( $this, 'add_body_class' ) );
	}
	
	public function add_body_class( $classes ) {
		$classes[] = 'bootstrap-genesis-fixed-nav';
		return $classes;
	}

	public function modify_nav_class( $classes_to_add ) {
		$classes_to_add['nav-primary'] = 'navbar navbar-default navbar-fixed-top';
		return $classes_to_add;
	}

	public function load_css() {
		if ( apply_filters( 'bootstrap_genesis_fixed_nav_load_css', true ) ) {
			wp_enqueue_style(
				'bsg-fixed-nav',
				plugins_url( 'assets/bsg-fixed-nav.css', __FILE__ ),
				'bsg_combined_css',
				'1.0.0'
			);
		}
	}

	public function option_hash_link_scroll_offset( $value ) {
		// height of navbar offset
		return '72';
	}

	public function add_boot_strap_affix_markup( $markup ) {
		$markup = rtrim( $markup, ">" ) . 'data-spy="affix" data-offset-top="32">';
		return $markup;
	}
}

add_action( 'after_setup_theme', 'bootstrap_genesis_fixed_nav' );
function bootstrap_genesis_fixed_nav() {
	new Bootstrap_Genesis_Fixed_Nav();
}

}
