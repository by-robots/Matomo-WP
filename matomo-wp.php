<?php
/**
 * Add the plugin to WordPress and gets the ball rolling.
 *
 * PHP version 7.0+
 *
 * Plugin Name: Matomo WP
 * Plugin URI: https://by-robots.com
 * Description: Add Matomo analytics to your WordPress website.
 * Version: X.X.X
 * Author: By Robots
 * Author URI: https://by-robots.com
 * License: GNU GPLv3
 *
 * @package  By_Robots\Matomo_WP
 */

// No direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * A new instance of Matomo_WP
 *
 * @return \By_Robots\Matomo_WP\Matomo_WP
 */
function matomo_wp() {
	require_once __DIR__ . '/autoloader.php';
	return new \By_Robots\Matomo_WP\Matomo_WP;
}

// Global for backwards compatibility.
$GLOBALS['matomo_wp'] = matomo_wp();
