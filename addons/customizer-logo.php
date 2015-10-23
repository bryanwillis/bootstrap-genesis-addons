<?php

    // add customizer controls
    add_action( 'customize_register', 'bsg_navbar_brand_logo_customize_register' );
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

    // show logo if it has been added via customizer
    add_filter( 'bsg_navbar_brand', 'bsg_customizer_add_navbar_brand' );
    function bsg_customizer_add_navbar_brand( $output ) {
        $brand_logo = get_theme_mod( 'brand_logo' );
        // check $brand_logo is set
        if ( ! $brand_logo ) {
            return $output;
        }
        $output = '<a class="navbar-brand" id="logo" style="padding-top: 10px; padding-bottom: 10px;" title="' .
            esc_attr( get_bloginfo( 'description' ) ) .
            '" href="' .
            esc_url( home_url( '/' ) ) .
            '">';
        $output .= '<img style="height: 100%; max-height: 100%; width: auto; margin: 0 auto;" src="' .
            $brand_logo .
            '" alt="' .
            esc_attr( get_bloginfo( 'name' ) ) .
            '">';
        $output .= '</a>';
        return $output;
    }
