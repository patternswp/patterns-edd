<?php
/**
 * Title: 404
 * Slug: patterns-edd/hidden-404
 * Inserter: no
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","hasParallax":true,"dimRatio":70,"overlayColor":"base","isUserOverlayColor":true,"minHeight":40,"minHeightUnit":"vh","contentPosition":"center center","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="min-height:40vh"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}},"textColor":"default","fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-left has-default-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;text-transform:capitalize"><?php echo esc_html__( '404', 'patterns-edd' ); ?></h1>
<!-- /wp:heading -->
    
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->


<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"0"}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-background-color has-background"
    style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
<!-- wp:group {"style":{"dimensions":{"minHeight":""}},"layout":{"type":"constrained","wideSize":"","justifyContent":"center","contentSize":""}} -->
<div class="wp-block-group">
<!-- wp:heading {"style":{"typography":{"fontSize":"14rem","fontStyle":"normal","fontWeight":"800"}}} -->
<h2 class="wp-block-heading" style="font-size:14rem;font-style:normal;font-weight:800"><?php echo esc_html__( '404', 'patterns-edd' ); ?></h2>
<!-- /wp:heading -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left"><?php echo esc_html__( 'Ooops!', 'patterns-edd' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size"><?php echo esc_html__( 'This page could not be found.', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20","style":{"layout":{}}} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer">
</div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><?php echo esc_html__( 'We can\'t find the page you\'re looking for. Check out our Help Center or head back to home', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-inside","query":{"post_type":"product"}} /-->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a
class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url() ); ?>"><?php echo esc_html__( 'Go Back', 'patterns-edd' ); ?></a>
</div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->