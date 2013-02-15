<?php
/**
 * Genesis eNews Extended
 *
 * @package   BJGK\Genesis_enews_extended
 * @version   1.1.1
 * @author    Brandon Kraft <public@brandonkraft.com>
 * @link      http://www.brandonkraft.com/contrib/plugins/genesis-enews-extended/
 * @copyright Copyright (c) 2012, Brandon Kraft
 * @license   GPL-2.0+
 */
/**
 * Shortcode to duplicate functions.
 *
 * @package BJGK\Genesis_enews_extended
 * @author Brandon Kraft <public@brandonkraft.com>
 * @since  0.0.0
 */
function enews_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'form-action' => '',
		'email-name' => 'EMAIL',
		'email-label' => 'Enter your e-mail address...',
		'first-name' => '',
		'first-name-label' => '',
		'last-name' => '',
		'last-name-label' => '',
		'title' => '',
		'text' => '', //text to show
		'submit' => '', // submit text
		'feedburner' => '', //FeedBurner ID
		'newwindow' => 0,
	), $atts ) );

	return "the form will be here";
}
add_shortcode( 'enews', 'enews_shortcode' );