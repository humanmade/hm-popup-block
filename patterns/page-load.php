<?php
/**
 * Pattern: Page Load Popup
 *
 * @package hm-popup
 */

return [
	'slug'        => 'hm-popup/page-load',
	'title'       => __( 'Page Load Popup', 'hm-popup' ),
	'description' => __( 'A modal popup that appears automatically when the page loads.', 'hm-popup' ),
	'categories'  => [ 'hm-popup' ],
	'content'     => '<!-- wp:hm/popup {"trigger":"load","anchor":"page-load-popup","opacity":75} -->
<dialog class="wp-block-hm-popup" id="page-load-popup" data-trigger="load" data-expiry="7" data-backdrop-opacity="0.75" data-dismiss-on-submit="false" closedby="any"><!-- wp:group {"style":{"shadow":"var:preset|shadow|natural","spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group has-white-background-color has-background" style="box-shadow:var(--wp--preset--shadow--natural);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Welcome!</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Thanks for visiting. Check out our latest offers below.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"url":"#close","metadata":{"popup":"close"}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#close">Close</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></dialog>
<!-- /wp:hm/popup -->',
];
