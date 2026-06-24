<?php
/**
 * Title: Page Transaction Failed
 * Slug: patterns-edd/page-transaction-failed
 * Categories: edd, page
 * Keywords: Page
 * Post Types: page
 * Description: A layout that displays transaction failed page.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"background":"#fae6e6"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#fae6e6;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:paragraph {"align":"center","textColor":"secondary","fontSize":"small"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Your transaction failed; please try again or contact site support.', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
