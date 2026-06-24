<?php
/**
 * Title: Featured Section 10
 * Slug: patterns-edd/featured-section-10
 * Categories: about,featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Who We are', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Our Story', 'patterns-edd' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:300"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore More', 'patterns-edd' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"0px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg","dimRatio":20,"overlayColor":"base","isUserOverlayColor":true,"minHeight":450,"isDark":false,"style":{"border":{"radius":"5px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover is-light" style="border-radius:5px;min-height:450px"><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-7.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg","dimRatio":20,"overlayColor":"base","isUserOverlayColor":true,"minHeight":500,"style":{"border":{"radius":"5px"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover" style="border-radius:5px;min-height:500px"><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-8.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
