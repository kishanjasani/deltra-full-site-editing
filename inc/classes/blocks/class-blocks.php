<?php
/**
 * Custom Blocks.
 *
 * @package deltra
 */

namespace DELTRA_THEME\Inc\Blocks;

use DELTRA_THEME\Inc\Traits\Singleton;

class Blocks {
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

		// Add Actions and filters.
	}

}
