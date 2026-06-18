<?php
/**
 * Title: Hero Banner
 * Slug: patterns-edd/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","dimRatio":80,"overlayColor":"base","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.5},"minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","metadata":{"name":"Hero Banner"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:80vh"><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container">

<!-- wp:pattern {"slug":"patterns-edd/hero-banner-content"} /-->

</div></div>
<!-- /wp:cover -->
