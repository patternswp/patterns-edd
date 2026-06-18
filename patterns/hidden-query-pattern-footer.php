<?php
/**
 * Title: Footer part of query pattern
 * Slug: patterns-edd/hidden-query-pattern-footer
 * Inserter: no
 *
 * @package    Patterns_Edd
 * @subpackage Patterns_Edd/patterns
 * @since      1.0.0
 */

?>
<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<?php
	// Need to include from PHP since wp:pattern not working
	// <!-- wp:pattern {"slug":"patterns-edd/pagination"} /-->
	// <!-- wp:pattern {"slug":"patterns-edd/hidden-query-no-results"} /--> .
	require 'pagination.php';
	require 'hidden-query-no-results.php';
?>
