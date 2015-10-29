<?php

/* Custom Stylesheet Override to avoid loosing changes on update. */
/* We're using wp_head so it's loaded last to ensure priority */

/* Useage */
/* add custom.css to bootstrap-genesis main folder -> wordpress/bootstrap-genesis/custom.css */
/* you can also use any of the following instead */
/* wordpress/custom.css, wordpress/css/custom.css, wordpress/wp-content/custom.css, wordpress/wp-content/css/custom.css, wordpress/bootstrap-genesis/css/custom.css, or use the css in this plugin folder: ..bootstrap-genesis-addons/custom.css */   

add_action( 'wp_head', 'bsg_load_custom_css_wp_head', 999 );

function bsg_load_custom_css_wp_head() {
  $bsg_theme_url = $theme = trailingslashit(get_stylesheet_directory_uri());
  $bsg_addons_css = plugin_dir_url( __FILE__ );

  $pre = apply_filters( 'bsg_pre_load_custom_css', false );

  if ( $pre !== false )
    $custom_css = $pre;
  elseif ( file_exists( $bsg_theme_url . 'custom.css' ) )
    $custom_css = $bsg_theme_url . 'custom.css';
  elseif ( file_exists( $bsg_theme_url . 'css/custom.css' ) )
    $custom_css = $bsg_theme_url . 'css/custom.css';
  // elseif ( file_exists( home_url() . '/custom.css' ) )
  //  $custom_css = home_url() . '/custom.css';
  // elseif ( file_exists( home_url() . '/css/custom.css' ) )
  //  $custom_css = home_url() . '/css/custom.css';
  // elseif ( file_exists( content_url() . '/custom.css' ) )
  //  $custom_css = content_url() . '/custom.css';
  // elseif ( file_exists( content_url() . '/css/custom.css' ) )
  //  $custom_css = content_url() . '/css/custom.css';    
  else
    // $bsg_addons_css = plugins_url( 'custom.css', __FILE__ );
    $custom_css = $bsg_addons_css . 'custom.css';

  $custom_css = apply_filters( 'bsg_custom_css_url', $custom_css );

  if ( $custom_css )
    // $css_file = file_get_contents($style_path);
    // echo '<style type="text/css">' . $css_file . '</style>';
    echo '<link rel="stylesheet" type="text/css" href="' . esc_url( $custom_css ) . '">' . "\n";
}


// Filter override example added. Remove comment tags (recommended) or put this in functions.php

/*

add_filter( 'bsg_pre_load_custom_css', 'my_bsg_custom_css_filter' );
function child_favicon_filter( $favicon_url ) {
	return 'http://example.com/wp-content/assets/css/custom.css';
}

// *
