<?php

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// theme version
if(! defined('LAWGIST_THEME_VERSION') ){
    define('LAWGIST_THEME_VERSION', wp_get_theme()->get('Version'));
} 

// Define the DHRUBOK Folder
if( ! defined( 'LAWGIST_DIR' ) ) {
	define('LAWGIST_DIR', get_template_directory() );
}

// Define the DHRUBOK Partials Folder
if( ! defined( 'LAWGIST_PARTIALS_DIR' ) ) {
	define('LAWGIST_PARTIALS_DIR', trailingslashit( LAWGIST_DIR ) . 'partials' );
}

// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'LAWGIST_ASSETS_DIR' ) ) {
	define('LAWGIST_ASSETS_DIR', trailingslashit( LAWGIST_DIR ) . 'assets' );
}


// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'LAWGIST_INC_DIR' ) ) {
	define('LAWGIST_INC_DIR', trailingslashit( LAWGIST_DIR ) . 'inc' );
}

// Define the Inc Folder of the DHRUBOK Directory
if( ! defined( 'LAWGIST_FRAMEWORK_DIR' ) ) {
	define('LAWGIST_FRAMEWORK_DIR', trailingslashit( LAWGIST_INC_DIR ) . 'framework' );
}

// Define the Libs Folder of the DHRUBOK Directory
if( ! defined( 'LAWGIST_LIBS_DIR' ) ) {
	define('LAWGIST_LIBS_DIR', trailingslashit( LAWGIST_DIR ) . 'libs' );
}

// Define the Shortcodes Folder of the DHRUBOK Directory
if( ! defined( 'LAWGIST_SHORTCODES_DIR' ) ) {
	define('LAWGIST_SHORTCODES_DIR', trailingslashit( LAWGIST_INC_DIR ) . 'shortcodes' );
}

// Define the Classes Folder of the DHRUBOK Directory
if( ! defined( 'LAWGIST_CLASSES_DIR' ) ) {
	define('LAWGIST_CLASSES_DIR', trailingslashit( LAWGIST_INC_DIR ) . 'classes' );
}

// Define the Widgets Folder of the DHRUBOK Directory
if( ! defined( 'LAWGIST_WIDGETS_DIR' ) ) {
	define('LAWGIST_WIDGETS_DIR', trailingslashit( LAWGIST_INC_DIR ) . 'widgets' );
}


// Define the PLUGINS Folder of the DHRUBOK Directory
if( ! defined( 'LAWGIST_INC_PLUGINS_DIR' ) ) {
	define('LAWGIST_INC_PLUGINS_DIR', trailingslashit( LAWGIST_INC_DIR ) . 'plugins' );
}
