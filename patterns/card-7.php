<?php
/**
 * Title: Card 7
 * Slug: patterns-edd/card-7
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull">

<!-- wp:image {"width":"auto","height":"60px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png" style="width:auto;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php esc_html_e( '1,41,183', 'patterns-edd' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Free Photos', 'patterns-edd' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
