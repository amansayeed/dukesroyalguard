<?php

/*
 * Autoloader
 */
require_once( TYPES_ABSPATH . '/vendor/toolset/autoloader/autoloader.php' );

$autoloader = Toolset_Autoloader::get_instance();

$autoloader->add_path( 'Toolset', TYPES_ABSPATH . '/vendor/toolset' );


/*
 * Load old Types
 */
if( ! defined( 'WPCF_RELPATH' ) ) {
	define( 'WPCF_RELPATH', TYPES_RELPATH . '/vendor/toolset/types' );
}

if( ! defined( 'WPCF_EMBEDDED_TOOLSET_ABSPATH' ) ) {
	define( 'WPCF_EMBEDDED_TOOLSET_ABSPATH', TYPES_ABSPATH . '/vendor/toolset' );
}

if( ! defined( 'WPCF_EMBEDDED_TOOLSET_RELPATH') ) {
	define( 'WPCF_EMBEDDED_TOOLSET_RELPATH', TYPES_RELPATH . '/vendor/toolset' );
}

if( ! defined( 'WPTOOLSET_COMMON_PATH' ) ) {
	define( 'WPTOOLSET_COMMON_PATH', TYPES_ABSPATH . '/vendor/toolset/toolset-common' );
}

if ( !defined( 'EDITOR_ADDON_RELPATH' ) ) {
	define( 'EDITOR_ADDON_RELPATH', WPCF_EMBEDDED_TOOLSET_RELPATH . '/toolset-common/visual-editor' );
}


// Get new functions.php
require_once( dirname( __FILE__ ) . '/functions.php' );

// Initialize legacy code
require_once( dirname( __FILE__ ) . '/../vendor/toolset/types/wpcf.php' );

// Public API
require_once( dirname( __FILE__ ) . '/controllers/main.php' );

// Jumpstart new Types
Types_Main::initialize();