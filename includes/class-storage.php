<?php
/**
 * The main plugin class. Sets up hooks.
 *
 * @package By_Robots\Matomo_WP
 */

namespace By_Robots\Matomo_WP;

/**
 * Class Storage
 */
class Storage {
	/**
	 * Set an item in storage.
	 *
	 * @param string $key   The name of the item.
	 * @param mixed  $value The value of the item.
	 */
	public function set( $key, $value ) {
		update_option( $key, $value );
	}

	/**
	 * Get an item from storage.
	 *
	 * @param string $key The key whose value to return.
	 *
	 * @return mixed|false The value, or false if not found.
	 */
	public function get( $key ) {
		return get_option( $key, false );
	}
}
