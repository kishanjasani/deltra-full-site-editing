<?php
/**
 * Deltra Theme file includes and definitions.
 *
 * @package deltra
 */

if ( ! defined( 'DELTRA_DIR_PATH' ) ) {
	define( 'DELTRA_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'DELTRA_DIR_URI' ) ) {
	define( 'DELTRA_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'DELTRA_BUILD_URI' ) ) {
	define( 'DELTRA_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'DELTRA_BUILD_JS_URI' ) ) {
	define( 'DELTRA_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'DELTRA_BUILD_PATH' ) ) {
	define( 'DELTRA_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'DELTRA_BUILD_JS_DIR_PATH' ) ) {
	define( 'DELTRA_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'DELTRA_BUILD_IMAGE_URI' ) ) {
	define( 'DELTRA_BUILD_IMAGE_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'DELTRA_BUILD_CSS_URI' ) ) {
	define( 'DELTRA_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'DELTRA_BUILD_CSS_DIR_PATH' ) ) {
	define( 'DELTRA_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

require_once DELTRA_DIR_PATH . '/inc/helpers/autoloader.php';

function deltra_get_theme_instance() {
	DELTRA_THEME\Inc\DELTRA_THEME::get_instance();
}
deltra_get_theme_instance();
