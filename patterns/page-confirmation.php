<?php
/**
 * Title:Page Confirmation
 * Slug: patterns-edd/page-confirmation
 * Categories: edd, page
 * Keywords: Page
 * Post Types: page
 * Description: A layout that displays confirmation page.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"40px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"color":{"background":"#eaf6f0"},"spacing":{"padding":{"top":"15px","bottom":"15px"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group has-background" style="background-color:#eaf6f0;padding-top:15px;padding-bottom:15px"><!-- wp:paragraph {"style":{"color":{"text":"#67927e"},"elements":{"link":{"color":{"text":"#67927e"}}}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#67927e"><?php esc_html_e( 'Thank you for your purchase!', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:edd/confirmation /-->
</div>
<!-- /wp:group -->