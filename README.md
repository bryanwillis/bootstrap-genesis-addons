# Bootstrap Genesis - Theme Add-Ons
This is a Wordpress theme specific plugin for [bootstrap-genesis](https://github.com/salcode/bootstrap-genesis) created by @salcode .

Add-on wordpress plugin providing specific modules and plugins that enable unique features for the [bootstrap-genesis theme](https://github.com/salcode/bootstrap-genesis). This plugin aims at making developing faster using bootstrap-genesis and also solves common issues you might come across trying to integrate bootstrap with other popular Wordpress plugins.

# Requirements
 - **genesis** 
 - **bootstrap-genesis** (parent theme or another genesis child theme - if not using bootstrap-genesis make sure you add bootstrap's css or most of the modules here will be of no use)


# Current Modules
 - **Grid Classes** - Make's it possible to add bootstrap grid classes to widgets.
 
# How to Use
 Simply install this as a plugin and add the following to your functions.php

```php
<?php
function bsg_addons_add_theme_support() {
	add_theme_support( 'bsg-grid-classes.php' );
}
add_action( 'after_setup_theme', 'bsg_addons_add_theme_support' );
```

----------

<p align="center"><img align="middle" width="300" src="https://cloud.githubusercontent.com/assets/4042621/6660594/fb19d3a0-cb6a-11e4-91c8-87e908b2baf2.png" /></p>


