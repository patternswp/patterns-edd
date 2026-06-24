<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Edd functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Edd
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_EDD_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_EDD_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_EDD_VERSION', '2.0.0' );
define( 'PATTERNS_EDD_THEME_NAME', 'patterns-edd' );
define( 'PATTERNS_EDD_OPTION_NAME', 'patterns-edd' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_EDD_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_edd_run() {
	new Patterns_Edd();
}
patterns_edd_run();
