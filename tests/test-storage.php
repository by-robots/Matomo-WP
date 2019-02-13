<?php
/**
 * Class StorageTest
 *
 * @package By_Robots\Matomo_WP
 */

namespace By_Robots\Matomo_WP\Tests;

/**
 * Test the Storage class.
 */
class StorageTest extends \WP_UnitTestCase {
	/**
	 * A value can be set.
	 */
	public function test_value_set() {
		$storage = new \By_Robots\Matomo_WP\Storage();
		$string  = 'doesn\'t look like anything to me';
		$storage->set( 'test_value', $string );

		$this->assertEquals( $string, get_option( 'test_value' ) );
	}

	/**
	 * A value can be retrieved.
	 */
	public function test_value_retrieved() {
		$storage = new \By_Robots\Matomo_WP\Storage();
		$string  = 'They say that great beasts once roamed this world, as big as mountains.';
		update_option( 'test_value', $string );

		$this->assertEquals( $string, $storage->get( 'test_value' ) );
	}
}
