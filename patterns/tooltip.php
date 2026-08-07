<?php
/**
 * Pattern: Anchored Tooltip
 *
 * @package hm-popup
 */

return [
	'slug'        => 'hm-popup/tooltip',
	'title'       => __( 'Anchored Tooltip', 'hm-popup' ),
	'description' => __( 'An info icon that shows a tooltip above it when hovered.', 'hm-popup' ),
	'categories'  => [ 'hm-popup' ],
	'content'     => '<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="#hover-tooltip">&#8505;&#65039;</a></p>
<!-- /wp:paragraph -->

<!-- wp:hm/popup {"trigger":"hover","anchor":"hover-tooltip","opacity":0,"dismissible":false,"className":"is-style-anchored","anchorPosition":"top","layout":{"type":"constrained","contentSize":"240px"}} -->
<dialog class="wp-block-hm-popup is-style-anchored" id="hover-tooltip" data-trigger="hover" data-expiry="7" data-anchor-position="top" data-backdrop-opacity="0" data-dismiss-on-submit="false" closedby="any"><!-- wp:group {"style":{"shadow":"var:preset|shadow|natural","spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="box-shadow:var(--wp--preset--shadow--natural);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}}} -->
<p style="font-size:0.875rem">This is a helpful tooltip. Add your explanatory text here.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></dialog>
<!-- /wp:hm/popup -->',
];
