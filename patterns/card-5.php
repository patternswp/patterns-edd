<?php
/**
 * Title: Card 5
 * Slug: patterns-edd/card-5
 * Categories: featured
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile">
        <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">            

            <!-- wp:image {"width":"auto","height":"550px","aspectRatio":"9/16","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"right","style":{"border":{"radius":"180px"}}} -->
            <figure class="wp-block-image alignright size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-3.jpg" style="border-radius:180px;aspect-ratio:9/16;object-fit:cover;width:auto;height:550px"/></figure>
            <!-- /wp:image -->

        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
            <!-- wp:image {"width":"170px","height":"250px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"80px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg" style="border-radius:80px;object-fit:cover;width:170px;height:250px"/></figure>
            <!-- /wp:image -->
            <!-- wp:image {"width":"170px","height":"250px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"80px"}}} -->
            <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-5.jpg"  style="border-radius:80px;object-fit:cover;width:170px;height:250px"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
<!-- /wp:columns -->