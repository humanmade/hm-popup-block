<?php
/**
 * Pattern: Left Popout Panel
 *
 * @package hm-popup
 */

return [
	'slug'        => 'hm-popup/left-popout',
	'title'       => __( 'Left Popout Panel', 'hm-popup' ),
	'description' => __( 'A button that slides in a panel from the left edge of the screen.', 'hm-popup' ),
	'categories'  => [ 'hm-popup', 'buttons' ],
	'content'     => '<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"url":"#left-popout","metadata":{"popup":"open"}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#left-popout">Open menu</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:hm/popup {"trigger":"click","anchor":"left-popout","opacity":75,"className":"is-style-side--left"} -->
<dialog class="wp-block-hm-popup is-style-side--left" id="left-popout" data-trigger="click" data-expiry="7" data-backdrop-opacity="0.75" data-dismiss-on-submit="false" closedby="any"><!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"border":{"right":{"color":"#dddddd","width":"4px","style":"solid"}},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"320px"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-right-color:#dddddd;border-right-style:solid;border-right-width:4px;min-height:100vh;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Navigation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Add links or content here.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"url":"#close","metadata":{"popup":"close"},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#close">Close</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></dialog>
<!-- /wp:hm/popup -->',
];
