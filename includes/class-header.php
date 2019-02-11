<?php
/**
 * Adds the tracking code to the site's header.
 *
 * @package By_Robots\Matomo_WP
 */

namespace By_Robots\Matomo_WP;

/**
 * Class Header
 */
class Header {
	/**
	 * Hook into the wp_head hook.
	 */
	public function __construct() {
		add_action( 'wp_head', array( $this, 'insert' ) );
	}

	/**
	 * Inserts the Matomo tracking JavaScript into the header if we have all the
	 * configuration options we need.
	 */
	public function insert() {
		$storage         = new Storage();
		$site_id         = $storage->get( 'matomo_wp_site_id' );
		$tracking_domain = $storage->get( 'matomo_wp_domain' );

		if ( ! empty( $site_id ) && ! empty( $tracking_domain ) ) {
			$snippet = new Generate_Snippet();

			// Note that we tell PHPCS to ignore the next few lines.
			// It'll flash the output as in issue, which it usually
			// would be. Here, however, it is not, as the code comes
			// from our template and we escape the user input below.
			// phpcs:disable
			echo $snippet->generate(
				array(
					'site_id' => (int) $site_id,
					'domain'  => esc_url( $tracking_domain ),
				)
			);
			// phpcs:enable
		}
	}
}
