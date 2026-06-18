<?php
/**
 * Title: Single Download
 * Slug: patterns-edd/single-download
 * Template Types: single-download
 * Description: A template layout for displaying an EDD single download page.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 * Duplicate of single-pattern.php since conditional tags aren't working and block binding isn't practical.
 * Tags are in sidebar.
 * @link https://developer.wordpress.org/themes/patterns/using-php-in-patterns/#patterns-are-registered-on-init
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:template-part {"slug":"single-header", "align":"full"} /-->
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull"  style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">
	
			<!-- wp:pattern {"slug":"patterns-edd/featured-image-with-border"} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
                <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->

                 <!-- wp:heading {"level":6} -->
                <h6 class="wp-block-heading"><?php esc_html_e( 'Related products', 'patterns-edd' ); ?></h6>
                <!-- /wp:heading -->

                <!-- wp:spacer {"height":"var:preset|spacing|30"} -->
                <div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
                <!-- /wp:spacer -->
                
				<!-- wp:query {"query":{"postType":"download","inherit":false,"perPage":3},"align":"wide","layout":{"type":"constrained"}} -->
				<div class="wp-block-query alignwide">
					<!-- wp:post-template {"align":"full","layout":{"type":"grid","columnCount":3}} -->
					<!-- wp:pattern {"slug":"patterns-edd/hidden-query-pattern-post-template-content"} /-->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%">

		    <!-- wp:pattern {"slug":"patterns-edd/hidden-single-download-sidebar"} /-->
        </div>
        <!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
