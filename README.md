# Bootstrap Genesis - Theme Add-Ons
This is a Wordpress theme specific plugin I use when building with [bootstrap-genesis](https://github.com/salcode/bootstrap-genesis).

Enabled addons add unique features for the [bootstrap-genesis theme](https://github.com/salcode/bootstrap-genesis). This plugin aims at making developing faster using bootstrap-genesis and also solves common issues you might come across trying to integrate bootstrap with other popular Wordpress plugins. 

# Requirements
 - **[Wordpress](https://github.com/WordPress/WordPress/)** 
 - **[Genesis](http://my.studiopress.com/themes/genesis/)** 
 - **[Bootstrap Genesis](https://github.com/salcode/bootstrap-genesis)** 


# Current Modules
 - **[Grid Classes](https://github.com/bryanwillis/bootstrap-genesis-addons/blob/master/addons/bsg-grid-classes.php)** - Make's it possible to add bootstrap grid classes to widgets.
 - **[Customizer Logo](https://github.com/salcode/bootstrap-genesis/wiki/Creating-the-Logo-Customizer)** - Adds the logo uploader. I also created a tutorial on how to do this in the bootstrap-genesis docs if you want to implement this directly into your theme (see link).
 - **Functions** - Add custom functions here to avoid getting overridden with bootstrap-genesis updates.
 - **CSS** - Add custom css to avoid getting overridden with bootstrap-genesis updates.

 
# How to Use
Simply install this as a plugin and activate. To remove specific functionality, comment out the line of the function you don't want [here](https://github.com/bryanwillis/bootstrap-genesis-addons/blob/master/bootstrap-genesis-addons.php#L27).

```php
	// add_theme_support( 'bsg-grid-classes' );
	// add_theme_support( 'bsg-customizer-logo' );
```

 Eventually enabling/disabling features will be added to the genesis theme options page for quicker setup.
 
 

----------

<p align="center"><img align="middle" width="300" src="https://cloud.githubusercontent.com/assets/4042621/6660594/fb19d3a0-cb6a-11e4-91c8-87e908b2baf2.png" /></p>




