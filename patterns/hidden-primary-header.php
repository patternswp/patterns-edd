<?php
/**
 * Title: Primary Header
 * Slug: patterns-edd/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group">
                <!-- wp:pattern {"slug":"patterns-edd/site-identity"} /-->

               <!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"constrained","justifyContent":"right"}} -->
                <div class="wp-block-group"> <!-- wp:pattern {"slug":"patterns-edd/navigation-menu"} /--></div>
                <!-- /wp:group -->
            </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"25px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group"><!-- wp:edd/cart {"show_total":false} /-->

        </div>
        <!-- /wp:group -->


    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->


