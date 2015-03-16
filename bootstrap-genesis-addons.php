<?php
/*
Plugin Name:        Bootstrap Genesis Add-Ons
Plugin URI:         https://github.com/bryanwillis/bootstrap-genesis-addons/
Description:        Bootstrap Genesis theme specific addons
Version:            1.0.0
Author:             bryanwillis
Author URI:         https://github.com/bryanwillis/
License:            MIT License
License URI:        http://opensource.org/licenses/MIT
*/


function load_bsg_addons() {
  foreach (glob(__DIR__ . '/addons/*.php') as $file) {
    if (current_theme_supports('bsg-' . basename($file, '.php'))) {
      require_once $file;
    }
  }
}
add_action('after_setup_theme', 'load_bsg_addons');
