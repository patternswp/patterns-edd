<?php
/**
 * Title: Featured Section 4
 * Slug: patterns-edd/featured-section-4
 * Categories: pricing,featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"quinary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quinary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    

<!-- wp:group {"metadata":{},"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Price &amp; Plans', 'patterns-edd' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Lorem Ipsum is simply', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->


<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:pattern {"slug":"patterns-edd/card-3"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:pattern {"slug":"patterns-edd/card-4"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
    <!-- wp:group {"style":{"border":{"style":"solid","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"borderColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-tertiary-border-color" style="border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p style="font-style:normal;font-weight:700"><?php esc_html_e( '$', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( '149', 'patterns-edd' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-tertiary-color has-text-color has-medium-font-size"><s><?php esc_html_e( '$', 'patterns-edd' ); ?></s></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"tertiary","fontSize":"large"} -->
<p class="has-tertiary-color has-text-color has-large-font-size"><s><?php esc_html_e( '199', 'patterns-edd' ); ?></s></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php esc_html_e( 'Personal', 'patterns-edd' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"border":{"radius":"50px"}},"backgroundColor":"accent","textColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-default-color has-accent-background-color has-text-color has-background has-link-color" style="border-radius:50px;padding-top:2px;padding-right:var(--wp--preset--spacing--10);padding-bottom:2px;padding-left:var(--wp--preset--spacing--10)"><!-- wp:paragraph -->
<p><?php esc_html_e( '50% off', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color has-link-color"><?php esc_html_e( 'Best Choice for Individuals', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"tertiary"} -->
<hr class="wp-block-separator has-text-color has-tertiary-color has-alpha-channel-opacity has-tertiary-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:list {"className":"is-style-checkmark-list"} -->
<ul class="wp-block-list is-style-checkmark-list"><!-- wp:list-item -->
<li><?php esc_html_e( 'Lifetime Usage', 'patterns-edd' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( '6 Months Support &amp; Updates', 'patterns-edd' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( '10 Website License', 'patterns-edd' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Quickstart Included', 'patterns-edd' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Access to Plugins &amp; Theme', 'patterns-edd' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Banding/Copyright Removal', 'patterns-edd' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->


<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Purchase Now', 'patterns-edd' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->