<?php
/**
 * Plugin Name: Matomo WP
 * Plugin URI: https://by-robots.com
 * Description: Add Matomo analytics to your WordPress website.
 * Version: X.X.X
 * Requires PHP: 7.0
 * Author: By Robots
 * Author URI: https://by-robots.com
 * License: MIT
 *
 * @package By_Robots\Matomo_WP
 */

// No direct access.
if (! defined('ABSPATH') ) {
    exit;
}

/**
 * A new instance of Matomo_WP
 *
 * @return \By_Robots\Matomo_WP\Matomo_WP
 */
function matomo_wp()
{
    //
}

// Global for backwards compatibility.
$GLOBALS['matomo_wp'] = matomo_wp();
