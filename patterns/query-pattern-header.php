<?php
/**
 * Title: Query Pattern Header
 * Slug: patterns-edd/query-pattern-header
 * Categories: query
 * Block Types: core/query
 * Description: A template layout for displaying a pattern header within the Query loop, placed before the post template, with multiple filter options.
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"metadata":{"name":"Query Pattern Header"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">

<!-- wp:group {"align":"wide","style":{"border":{"color":"#d3d9de","style":"solid","width":"1px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}},"backgroundColor":"default","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-border-color has-default-background-color has-background alignwide" style="border-color:#d3d9de;border-style:solid;border-width:1px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px">

<!-- wp:query-total /-->

<!-- wp:search {"label":"<?php esc_attr_e( 'Search', 'patterns-edd' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search', 'patterns-edd' ); ?>","buttonText":"<?php esc_attr_e( 'Search', 'patterns-edd' ); ?>","buttonPosition":"no-button","buttonUseIcon":true} /-->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
