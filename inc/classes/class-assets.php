<?php
/**
 * Enqueue theme assets.
 *
 * @package deltra
 */

namespace DELTRA_THEME\Inc;

use DELTRA_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 */
	protected function setup_hooks() {

		// Actions and filters.
		add_action( 'wp_enqueue_scripts', [ $this, 'register_styles' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts' ] );
	}

	/**
	 * Register styles.
	 *
	 * @action wp_enqueue_scripts
	 */
	public function register_styles() {

		// Register Styles.
		wp_register_style( 'main-css', DELTRA_BUILD_CSS_URI . '/main.css', [], filemtime( DELTRA_BUILD_CSS_DIR_PATH . '/main.css' ), 'all' );

		// Enqueue Styles.
		wp_enqueue_style( 'main-css' );
	}

	/**
	 * Register scripts.
	 *
	 * @action wp_enqueue_scripts
	 */
	public function register_scripts() {

		// Register Scripts.
		wp_register_script( 'main-js', DELTRA_BUILD_JS_URI . '/main.js', [], filemtime( DELTRA_BUILD_JS_DIR_PATH . '/main.js' ), true );

		// Enqueue Scrips.
		wp_enqueue_script( 'main-js' );
	}
}
