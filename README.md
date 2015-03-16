# Bootstrap Genesis - Theme Add-Ons
This is a Wordpress theme specific plugin I use when building with [bootstrap-genesis](https://github.com/salcode/bootstrap-genesis) created by @salcode. It was inspired by roots/soil plugin and many of the modules take code and ideas from the various genesis and bootsrap plugins out there.

Enabled addons add unique features for the [bootstrap-genesis theme](https://github.com/salcode/bootstrap-genesis). This plugin aims at making developing faster using bootstrap-genesis and also solves common issues you might come across trying to integrate bootstrap with other popular Wordpress plugins. 

# Requirements
 - **[Genesis](http://my.studiopress.com/themes/genesis/)** 
 - **[Bootstrap Genesis](https://github.com/salcode/bootstrap-genesis)**  (parent theme or another genesis child theme - if not using bootstrap-genesis make sure you add bootstrap's css or most of the modules here will be of no use)




# Current Modules
 - **[Grid Classes](https://github.com/bryanwillis/bootstrap-genesis-addons/blob/master/addons/bsg-grid-classes.php)** - Make's it possible to add bootstrap grid classes to widgets.
 
# How to Use
 Simply install this as a plugin and add the following to your functions.php. Eventually this will be added to the genesis theme options page for quicker setup.

```php
<?php
function bsg_addons_add_theme_support() {
	add_theme_support( 'bsg-grid-classes.php' );
}
add_action( 'after_setup_theme', 'bsg_addons_add_theme_support' );
```

----------

<p align="center"><img align="middle" width="300" src="https://cloud.githubusercontent.com/assets/4042621/6660594/fb19d3a0-cb6a-11e4-91c8-87e908b2baf2.png" /></p>


