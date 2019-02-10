<?php
/**
 * The main plugin class. Sets up hooks.
 *
 * @package By_Robots\Matomo_WP
 */

namespace By_Robots\Matomo_WP;

/**
 * Class Matomo_WP
 */
class Matomo_WP {
	/**
	 * Set-up the plugin.
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		// Add the plugin settings.
		new Settings();
	}

	/**
	 * Load the plugin's textdomain.
	 */
	public function load_textdomain() {
		load_plugin_textdomain(
			'matomo-wp',
			false,
			basename( dirname( MWP_PLUGIN_FILE ) ) . '/languages/'
		);
	}
}
