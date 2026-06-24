<?php
/**
 * Title: Featured Section 11
 * Slug: patterns-edd/featured-section-11
 * Categories: contact, call-to-action
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fit","flexSize":""},"spacing":{"padding":{"bottom":"var:preset|spacing|80","top":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color"><?php esc_html_e( 'Contact with us', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Do you have any questions?', 'patterns-edd' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e( 'Fill out our form and we will contact you within 24 hours.', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"pe-form","layout":{"type":"constrained"}} -->
<div class="wp-block-group pe-form"><!-- wp:shortcode {"metadata":{"name":""}} -->
<?php esc_html_e( 'Add Contact form shortcode', 'patterns-edd' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"},"position":{"type":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-9.png" style="width:auto;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":5} -->
<h5 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Call to Us', 'patterns-edd' ); ?>:</h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|10","style":{"layout":[]}} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.4","letterSpacing":"1px","fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:300;letter-spacing:1px;line-height:1.4"><?php esc_html_e( 'Send us a note anytime — we welcome feedback and requests.', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6} -->
<h6 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Customer Service:', 'patterns-edd' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"medium"} -->
<p class="has-text-align-left has-link-color has-medium-font-size"><a href="<?php echo esc_url( 'tel:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-edd' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"auto","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-10.png" style="width:auto;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":5} -->
<h5 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Write to Us:', 'patterns-edd' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"10px","style":{"layout":[]}} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.4","letterSpacing":"1px","fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:300;letter-spacing:1px;line-height:1.4"><?php esc_html_e( 'Fill out our form and we will contact you within 24 hours.', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6} -->
<h6 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Customer Service:', 'patterns-edd' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"medium"} -->
<p class="has-text-align-left has-link-color has-medium-font-size"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-edd' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:image {"width":"auto","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-11.png" style="width:auto;height:40px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":5} -->
<h5 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Find Us:', 'patterns-edd' ); ?></h5>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"10px","style":{"layout":[]}} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.4","letterSpacing":"1px","fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary","fontSize":"medium"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:300;letter-spacing:1px;line-height:1.4"><?php esc_html_e( 'Want to visit our Offline Stores?', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5} -->
<h5 class="wp-block-heading has-text-align-left"><?php esc_html_e( 'Location', 'patterns-edd' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"textColor":"tertiary"} -->
<p class="has-text-align-left has-tertiary-color has-text-color has-link-color"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
