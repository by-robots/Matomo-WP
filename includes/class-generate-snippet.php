<?php
/**
 * Generates the Matomo JavaScript snippet.
 *
 * @package By_Robots\Matomo_WP
 */

namespace By_Robots\Matomo_WP;

/**
 * Class Generate_Snippet
 */
class Generate_Snippet {
	/**
	 * Contains the template to use.
	 *
	 * @var string
	 */
	private $template;

	/**
	 * Set the default template.
	 */
	public function __construct() {
		$this->template = file_get_contents( __DIR__ . '/../templates/basic.html' );
	}

	/**
	 * Set the template.
	 *
	 * @param string $template The template.
	 */
	public function set_template( $template ) {
		$this->template = $template;
	}

	/**
	 * Use the template and generate the snippet.
	 *
	 * @param array $variables Variables to be inserted into the template.
	 *
	 * @return string The generated snippet.
	 */
	public function generate( $variables = array() ) {
		$template = $this->template;
		foreach ( $variables as $key => $value ) {
			$template = str_replace( '{{ ' . $key . ' }}', $value, $template );
		}

		return $template;
	}
}
