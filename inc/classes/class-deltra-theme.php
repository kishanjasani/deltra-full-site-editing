<?php
/**
 * Bootstraps the Theme.
 *
 * @package deltra
 */

namespace DELTRA_THEME\Inc;

use DELTRA_THEME\Inc\Traits\Singleton;
use DELTRA_THEME\Inc\Blocks\Blocks as Blocks;

class DELTRA_THEME {
	use Singleton;

	protected function __construct() {

		// load class.
		Assets::get_instance();
		Blocks::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks() {

		// Actions and filters.
		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
	}

	public function setup_theme() {

        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Deltra, use a find and replace
		 * to change 'deltra' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'deltra', get_template_directory() . '/languages' );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * Adding this will allow you to select the featured image on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1568, 9999 );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Switch default core markup for search form, comment form, comment-list, gallery, caption, script and style
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			[
				'comment-form',
				'comment-list',
			]
		);

		// Gutenberg theme support.

		/**
		 * Some blocks in Gutenberg like tables, quotes, separator benefit from structural styles (margin, padding, border etc…)
		 * They are applied visually only in the editor (back-end) but not on the front-end to avoid the risk of conflicts with the styles wanted in the theme.
		 * If you want to display them on front to have a base to work with, in this case, you can add support for wp-block-styles, as done below.
		 * @see Theme Styles.
		 * @link https://make.wordpress.org/core/2018/06/05/whats-new-in-gutenberg-5th-june/, https://developer.wordpress.org/block-editor/developers/themes/theme-support/#default-block-styles
		 */
		add_theme_support( 'wp-block-styles' );

		/**
		 * Some blocks such as the image block have the possibility to define
		 * a “wide” or “full” alignment by adding the corresponding classname
		 * to the block’s wrapper ( alignwide or alignfull ). A theme can opt-in for this feature by calling
		 * add_theme_support( 'align-wide' ), like we have done below.
		 *
		 * @see Wide Alignment
		 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#wide-alignment
		 */
		add_theme_support( 'align-wide' );

		/**
         * Loads the editor styles in the Gutenberg editor.
         *
         * Editor Styles allow you to provide the CSS used by WordPress’ Visual Editor so that it can match the frontend styling.
         * If we don't add this, the editor styles will only load in the classic editor ( tiny mice )
         *
         * @see https://developer.wordpress.org/block-editor/developers/themes/theme-support/#editor-styles
         */
		add_theme_support( 'editor-styles' );

		/**
		 *
		 * Path to our custom editor style.
		 * It allows you to link a custom stylesheet file to the TinyMCE editor within the post edit screen.
		 *
		 * Since we are not passing any parameter to the function,
		 * it will by default, link the editor-style.css file located directly under the current theme directory.
		 * In our case since we are passing 'assets/build/css/editor.css' path it will use that.
		 * You can change the name of the file or path and replace the path here.
		 *
		 * @see add_editor_style(
		 * @link https://developer.wordpress.org/reference/functions/add_editor_style/
		 */
		add_editor_style( 'assets/build/css/editor.css' );

		// Remove the core block patterns.
		// remove_theme_support( 'core-block-patterns' );

        // Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}

}
