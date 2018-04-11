<?php
/**
 * Events TK Hooks
 *
 * @since 1.0.0
 *
 * @package Events_TK
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * WP Hooks & Filters Class
 *
 * Setup and run all the hooked functions and filters.
 *
 * @since   1.0.0
 * @package Events_TK_Hooks
 */
class Events_TK_Hooks {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    Events_TK_Loader $loader Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * Setup all the hooks and the loader
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		$this->loader = new Events_TK_Loader();
		$this->set_locale();
		$this->define_admin_hooks();

	}

	/**
	 * Define the locale for internationalization
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function set_locale() {

		$events_tk_i18n = new Events_TK_I18n();

		// Theme text domain.
		$this->loader->add_action( 'plugins_loaded', $events_tk_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the WP Admin
	 *
	 * @since  1.0.0
	 * @access private
	 */
	private function define_admin_hooks() {

		$events_tk_admin = new Events_TK_Admin();

	}

	/**
	 * Run the loader to execute all of the hooks with WP
	 *
	 * @since 1.0.0
	 */
	public function run() {

		$this->loader->run();

	}

	/**
	 * The reference to the class that orchestrates the hooks
	 *
	 * @since  1.0.0
	 * @return Events_TK_Loader Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {

		return $this->loader;

	}

}
