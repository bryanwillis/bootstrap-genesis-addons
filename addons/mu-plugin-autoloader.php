<?php
/*
Module Name: Autoload mu-plugin subfolders
Description: This is a plugin loader which scans all plugin folders in MU-PLUGINs directory and loads all plugin bootstrap files in those folders. For this to work, a plugin's bootstrap file should be named same as plugin folder name with a '.php' extension
*/


function bsg_mu_plugins_loader() {
	if( ! defined( 'WPMU_PLUGIN_DIR' ) ) {
		return;
	}

	$mu_plugins_dirs = array_filter( scandir( WPMU_PLUGIN_DIR ) );

	$non_dirs = array(
		'.',
		'..',
		'.DS_Store',
	);

	//strip out non-dirs
	for( $i = 0; $i < count( $non_dirs ); $i++ ) {
		$not_dir_key = array_search( $non_dirs[ $i ], $mu_plugins_dirs );

		if( $not_dir_key !== false ) {
			unset( $mu_plugins_dirs[ $not_dir_key ] );
		}

		unset( $not_dir_key );
	}

	unset( $non_dirs );

	if( empty( $mu_plugins_dirs ) ) {
		return;
	}

	sort( $mu_plugins_dirs );

	//load up mu-plugins from each valid directory
	foreach( $mu_plugins_dirs as $dir ) {
		$plugin_dir = trailingslashit( WPMU_PLUGIN_DIR ) . $dir;
		$plugin_file = trailingslashit( $plugin_dir ) . $dir . '.php';

		if( is_dir( $plugin_dir ) && file_exists( $plugin_file ) ) {
			require_once( $plugin_file );
		}

		unset( $plugin_file, $plugin_dir );
	}
}

bsg_mu_plugins_loader();


//EOF
