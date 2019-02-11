<?php
/**
 * Class StorageTest
 *
 * @package By_Robots\Matomo_WP
 */

namespace By_Robots\Matomo_WP\Tests;

/**
 * Test the Generate_Snippet class.
 */
class GenerateSnippetTest extends \WP_UnitTestCase {
	/**
	 * The class should use the template provided.
	 */
	public function test_uses_template() {
		$template         = '<p>Get to the chopper.</p>';
		$generate_snippet = new \By_Robots\Matomo_WP\Generate_Snippet();

		$generate_snippet->set_template( $template );

		$this->assertEquals( $template, $generate_snippet->generate() );
	}

	/**
	 * Arrays should be able to have variables.
	 */
	public function test_template_variables() {
		$variables        = array( 'string' => 'I ain\'t got time to bleed.' );
		$generate_snippet = new \By_Robots\Matomo_WP\Generate_Snippet();

		$generate_snippet->set_template( '<p>{{ string }}</p>' );

		$this->assertEquals(
			'<p>' . $variables[ 'string' ] . '</p>',
			$generate_snippet->generate( $variables )
		);
	}

	/**
	 * When no template is set the class should use the default.
	 */
	public function test_uses_default() {
		$template         = file_get_contents( __DIR__ . '/../templates/basic.html' );
		$generate_snippet = new \By_Robots\Matomo_WP\Generate_Snippet();

		$this->assertEquals( $template, $generate_snippet->generate() );
	}
}
