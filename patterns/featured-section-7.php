<?php
/**
 * Title: Featured Section 7
 * Slug: patterns-edd/featured-section-7
 * Categories: posts, query, featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

<!-- wp:group {"metadata":{},"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'News Feeds', 'patterns-edd' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Latest news and blogs', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"base","isUserOverlayColor":true,"minHeight":500,"contentPosition":"bottom left","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:15px"><!-- wp:post-date {"format":"M j, Y","displayType":"modified","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"textColor":"default","fontSize":"x-small"} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"lineHeight":"1.1"}}} /--></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

</div>
<!-- /wp:group -->
