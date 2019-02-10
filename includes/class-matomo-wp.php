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
		// Add the plugin settings.
		new Settings();
	}
}
