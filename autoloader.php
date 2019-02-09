<?php
/**
 * Autoload our classes.
 *
 * @link    https://www.php-fig.org/psr/psr-4/examples/
 * @package By_Robots\Matomo_WP
 *
 * @param string $class The fully-qualified class name.
 */

spl_autoload_register(
	function ( $class ) {
		// Namespace prefix.
		$prefix         = 'By_Robots\\Matomo_WP\\';
		$base_directory = __DIR__ . '/includes/';

		// Does the class use the namespace prefix?
		$len = strlen( $prefix );
		if ( strncmp( $prefix, $class, $len ) !== 0 ) {
			// No, nothing to do.
			return;
		}

		$relative_class = substr( $class, $len );

		// Replace the namespace prefix with the base directory, replace
		// namespace separators with directory separators in the relative class
		// name, replace underscores with hypens, prepend with class- and append
		// with .php.
		//
		// Phew.
		$exploded               = explode( '\\', $relative_class );
		$count                  = count( $exploded );
		$exploded[ $count - 1 ] = str_replace( '_', '-', $exploded[ $count - 1 ] );
		$exploded[ $count - 1 ] = strtolower( 'class-' . $exploded[ $count - 1 ] . '.php' );
		$file                   = $base_directory . implode( '/', $exploded );

		// Now, if the file exists, we can load it.
		if ( file_exists( $file ) ) {
			require $file;
		}
	}
);
