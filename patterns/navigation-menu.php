<?php
/**
 * Title: Navigation Menu
 * Slug: patterns-edd/navigation-menu
 * Description: A pattern for displaying the site menu.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"}} -->
	<!-- wp:home-link {"label":"<?php echo esc_html_x( 'Home', 'label', 'patterns-edd' ); ?>"} /-->
    <!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'patterns-edd' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Downloads', 'patterns-edd' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'patterns-edd' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Contact', 'patterns-edd' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->
