<?php
/**
 * Fired during plugin activation
 *
 * @since   1.0.0
 *
 * @package Events_TK
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since 1.0.0
 */
class Events_TK_Activator {

	/**
	 * On activation
	 *
	 * @since 1.0.0
	 */
	public static function activate() {

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';

	}

}
