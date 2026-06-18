<?php
/**
 * Title: Featured Section 9
 * Slug: patterns-edd/featured-section-9
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:pattern {"slug":"patterns-edd/card-7"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center">
    <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
    <div class="wp-block-group alignfull">
        
    <!-- wp:image {"width":"auto","height":"60px","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-6.png" style="width:auto;height:60px"/></figure>
    <!-- /wp:image -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"level":6} -->
    <h6 class="wp-block-heading"><?php esc_html_e( '27.39 M', 'patterns-edd' ); ?></h6>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"textColor":"tertiary"} -->
    <p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Total Downloads', 'patterns-edd' ); ?></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->    
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center">
    
    <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
    <div class="wp-block-group alignfull">
        
    <!-- wp:image {"width":"auto","height":"60px","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-7.png" style="width:auto;height:60px"/></figure>
    <!-- /wp:image -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"level":6} -->
    <h6 class="wp-block-heading"><?php esc_html_e( '1,04,743', 'patterns-edd' ); ?></h6>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"textColor":"tertiary"} -->
    <p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Total Members', 'patterns-edd' ); ?></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->  

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-center">
    
    <!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
    <div class="wp-block-group alignfull">
        
    <!-- wp:image {"width":"auto","height":"60px","sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-8.png" style="width:auto;height:60px"/></figure>
    <!-- /wp:image -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide"><!-- wp:heading {"level":6} -->
    <h6 class="wp-block-heading"><?php esc_html_e( 'Over 10k+ Styles', 'patterns-edd' ); ?></h6>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"textColor":"tertiary"} -->
    <p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Everything you need', 'patterns-edd' ); ?></p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group -->  

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->