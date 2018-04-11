<?php
/**
 * Setup Events TK
 *
 * Setup public global variables for the application.
 *
 * @since 1.0.0
 *
 * @package Events_TK
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Include the Google library
 */
require_once EVENTS_TK_DIR . 'packages/autoload.php';

/**
 * Events_TK
 *
 * This class is used to setup Events TK and
 * global variables.
 *
 * @since 1.0.0
 */
final class Events_TK {

	/**
	 * The single instance of the class
	 *
	 * @since 1.0.0
	 * @var   Events_TK
	 */
	protected static $_instance = null;

	/**
	 * Setup Events_TK
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		$this->load();
		$this->hooks();

	}

	/**
	 * Main Events_TK Instance
	 *
	 * @since  1.0.0
	 * @static
	 * @return Events_TK Main instance
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Load Dependencies
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function load() {

		// Define all the hooks.
		require_once EVENTS_TK_DIR . 'includes/class-events-tk-hooks.php';
		// Loader for the actions and filters of the core plugin.
		require_once EVENTS_TK_DIR . 'includes/class-events-tk-loader.php';
		// Internationalization functionality.
		require_once EVENTS_TK_DIR . 'includes/class-events-tk-i18n.php';
		// WP-Admin functionality.
		require_once EVENTS_TK_DIR . 'includes/class-events-tk-admin.php';

	}

	/**
	 * Load Hooks
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function hooks() {

		$hooks = new Events_TK_Hooks();
		$hooks->run();

	}

}
