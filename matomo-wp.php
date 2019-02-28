<?php
/**
 * Add the plugin to WordPress and gets the ball rolling.
 *
 * PHP version 5.6+
 *
 * Plugin Name: Matomo WP
 * Plugin URI: https://github.com/by-robots/Matomo-WP
 * Description: Add Matomo analytics to your WordPress website.
 * Version: X.X.X
 * Author: By Robots
 * Author URI: https://by-robots.dev
 * Text Domain: matomo-wp
 * Domain Path: /languages
 * License: GNU GPLv3
 *
 * @package  By_Robots\Matomo_WP
 */

// No direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define constants.
define( 'MWP_PLUGIN_FILE', __FILE__ );

/**
 * A new instance of Matomo_WP
 *
 * @return \By_Robots\Matomo_WP\Matomo_WP
 */
function matomo_wp() {
	require_once __DIR__ . '/autoloader.php';
	return new \By_Robots\Matomo_WP\Matomo_WP();
}

// Global for backwards compatibility.
$GLOBALS['matomo_wp'] = matomo_wp();
