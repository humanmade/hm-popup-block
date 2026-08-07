<?php
/**
 * Pattern: Click-Triggered Popup
 *
 * @package hm-popup
 */

return [
	'slug'        => 'hm-popup/click-popup',
	'title'       => __( 'Click-Triggered Popup', 'hm-popup' ),
	'description' => __( 'A button that opens a modal popup when clicked.', 'hm-popup' ),
	'categories'  => [ 'hm-popup', 'buttons' ],
	'content'     => '<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"url":"#click-popup","metadata":{"popup":"open"}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#click-popup">Open popup</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:hm/popup {"trigger":"click","anchor":"click-popup","opacity":75} -->
<dialog class="wp-block-hm-popup" id="click-popup" data-trigger="click" data-expiry="7" data-backdrop-opacity="0.75" data-dismiss-on-submit="false" closedby="any"><!-- wp:group {"style":{"shadow":"var:preset|shadow|natural","spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group has-white-background-color has-background" style="box-shadow:var(--wp--preset--shadow--natural);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Popup title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Add your message or content here.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"url":"#close","metadata":{"popup":"close"}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#close">Close</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></dialog>
<!-- /wp:hm/popup -->',
];
