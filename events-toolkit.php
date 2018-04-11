<?php
/**
 * Events Toolkit
 *
 * @since 1.0.0
 * @package events-toolkit
 *
 * @wordpress-plugin
 * Plugin Name:       Events Toolkit
 * Plugin URI:        http://www.45press.com
 * Description:       Toolkit for WP events
 * Version:           1.0.0
 * Author:            45Press
 * Author URI:        http://www.45press.com
 * Text Domain:       events-toolkit
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'EVENTS_TK_VERSION', '1.0.0' );
define( 'EVENTS_TK_NAME', 'events-toolkit' );
define( 'EVENTS_TK_DIR', plugin_dir_path( __FILE__ ) );
define( 'EVENTS_TK_DIR_URL', plugin_dir_url( __FILE__ ) );

/**
 * Runs during plugin activation
 */
function activate_events_tk() {
	require_once EVENTS_TK_DIR . 'includes/class-events-tk-activator.php';
	Events_TK_Activator::activate();
}

/**
 * Runs during plugin deactivation
 */
function deactivate_events_tk() {
	require_once EVENTS_TK_DIR . 'includes/class-events-tk-deactivator.php';
	Events_TK_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_events_tk' );
register_deactivation_hook( __FILE__, 'deactivate_events_tk' );

// Include the main class.
if ( ! class_exists( 'Events_TK' ) ) {
	include_once EVENTS_TK_DIR . 'includes/class-events-tk.php';
}

/**
 * Main instance of Events TK
 *
 * Returns the main instance of Events TK to prevent the need to use PHP globals
 * manages important variables.
 *
 * @since  1.0.0
 * @return Events_TK
 */
function events_tk() {
	return Events_TK::instance();
}
events_tk();
