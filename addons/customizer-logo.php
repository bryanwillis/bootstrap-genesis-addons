<?php

// css styling so logo doesn't overflow off the navbar
function bsg_navbar_brand_logo_css() {
    ?>
<style type="text/css">
.navbar-brand >  img {
  object-fit: contain;
  max-height: 100%;
}
</style>
        <?php
}
add_action( 'wp_head', 'bsg_navbar_brand_logo_css' );

// add customizer controls
function bsg_navbar_brand_logo_customize_register( $wp_customize ) {
$wp_customize->add_setting( 'brand_logo', 
         array(
            'default' => '', 
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'refresh',
         ) 
      );     
$wp_customize->add_control( new WP_Customize_Image_Control(
         $wp_customize, 
         'bsg_brand_logo', 
         array(
            'label' => __( 'Navbar Logo', 'bsg' ),
            'section' => 'title_tagline', 
            'settings' => 'brand_logo',
            'priority' => 10,
         ) 
      ) );
}
add_action( 'customize_register', 'bsg_navbar_brand_logo_customize_register' );

// show logo if added to customizer
function bsg_customizer_add_navbar_brand() { 
    if( get_theme_mod( 'brand_logo') !== '' ) {
    $output = '<a class="navbar-brand" id="logo" href="'. esc_url( home_url( '/' ) ) .'" title="'. esc_attr( get_bloginfo( 'name', 'display' ) ) .'" rel="home" ><img src="'. esc_url( get_theme_mod( 'brand_logo' ) ) .'" alt="'. esc_attr( get_bloginfo( 'name', 'display' ) ) .'"></a>';
    } else {
    $output .= '<a class="navbar-brand" id="logo" title="' .
                esc_attr( get_bloginfo( 'description' ) ) .
                '" href="' .
                    esc_url( home_url( '/' ) ) .
            '">';
    $output .= get_bloginfo( 'name' );
    $output .= '</a>'; 
    }
return $output;
}

// filter default navbar
add_filter( 'bsg_navbar_brand', 'ironcode_navbar_brand' );
function ironcode_navbar_brand( $output ) {
    $output = bsg_customizer_add_navbar_brand();
    return $output;
}
