<?php
/**
 * Set up the plugin settings.
 *
 * @package By_Robots\Matomo_WP
 */

namespace By_Robots\Matomo_WP;

/**
 * Class Matomo_WP
 */
class Settings {
	/**
	 * Interact with storage.
	 *
	 * @var \By_Robots\Matomo_WP\Storage
	 */
	private $storage;

	/**
	 * Add the appropriate action.
	 */
	public function __construct() {
		$this->storage = new Storage();

		add_action( 'admin_init', array( $this, 'add' ) );
	}

	/**
	 * Add the admin page.
	 */
	public function add() {
		add_settings_section(
			'matomo_wp_settings',
			__( 'Configure Matomo WP', 'matomo-wp' ),
			array( $this, 'section_callback' ),
			'general'
		);

		add_settings_field(
			'matomo_wp_url',
			__( 'Script Domain', 'matomo-wp' ),
			array( $this, 'domain_field_callback' ),
			'general',
			'matomo_wp_settings'
		);

		register_setting( 'general', 'matomo_wp_url' );
	}

	/**
	 * The section callback.
	 */
	public function section_callback() {
		echo '<p>' .
			esc_html__( 'Configure your Matomo tracking settings.', 'matomo-wp' ) .
			'</p>';
	}

	/**
	 * Build the HTML for the domain field.
	 */
	public function domain_field_callback() {
		echo '<input
			type="text"
			name="matomo_wp_url"
			id="matomo_wp_url"
			placeholder="//analytics.by-robots.com"
			value="' . esc_attr( $this->storage->get( 'matomo_wp_url' ) ) . '"
		/>';
	}
}
