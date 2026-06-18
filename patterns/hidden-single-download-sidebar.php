<?php
/**
 * Title: Single download sidebar
 * Slug: patterns-edd/hidden-single-download-sidebar
 * Inserter: no
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 * Duplicate of hidden-single-pattern-sidebar.php since conditional tags aren't working and block binding isn't practical.
 * @link https://developer.wordpress.org/themes/patterns/using-php-in-patterns/#patterns-are-registered-on-init
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Card"},"style":{"border":{"style":"solid","width":"1px"},"spacing":{"blockGap":"0px"}},"borderColor":"quinary","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-quinary-border-color" style="border-style:solid;border-width:1px"><!-- wp:group {"metadata":{"name":"Card Header"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base","textColor":"default","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-default-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<h6 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( 'Purchases', 'patterns-edd' ); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card Body"},"align":"full","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
	<!-- wp:edd/buy-button /-->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card"},"style":{"border":{"style":"solid","width":"1px"},"spacing":{"blockGap":"0px"}},"borderColor":"quinary","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-quinary-border-color" style="border-style:solid;border-width:1px"><!-- wp:group {"metadata":{"name":"Card Header"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base","textColor":"default","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-default-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<h6 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( 'Author', 'patterns-edd' ); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card Body"},"align":"full","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:post-author {"avatarSize":24,"showBio":false,"isLink":true,"className":"pwp-txt-dec-non"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card"},"style":{"border":{"style":"solid","width":"1px"},"spacing":{"blockGap":"0px"}},"borderColor":"quinary","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-quinary-border-color" style="border-style:solid;border-width:1px"><!-- wp:group {"metadata":{"name":"Card Header"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base","textColor":"default","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-default-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<h6 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( 'Category', 'patterns-edd' ); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card Body"},"align":"full","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
	<!-- wp:post-terms {"term":"download_category","separator":"","patterns-store-empty-text":"<?php esc_html_e( 'Categories not found.', 'patterns-edd' ); ?>"} /-->
	</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card"},"style":{"border":{"style":"solid","width":"1px"},"spacing":{"blockGap":"0px"}},"borderColor":"quinary","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-quinary-border-color" style="border-style:solid;border-width:1px"><!-- wp:group {"metadata":{"name":"Card Header"},"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"base","textColor":"default","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-default-color has-base-background-color has-text-color has-background has-link-color" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<h6 class="wp-block-heading" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( 'Tags', 'patterns-edd' ); ?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Card Body"},"align":"full","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">
	<!-- wp:post-terms {"term":"download_tag","separator":"","patterns-store-empty-text":"<?php esc_html_e( 'Tags not found.', 'patterns-edd' ); ?>"} /-->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->

