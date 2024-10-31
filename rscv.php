<?php
/*
Plugin Name: Really Simple Comment Validation
Plugin URI: http://cubegames.net/blog/projects/plugins/rscv/
Description: Adds a nonce field to the comment form to deter some comment spammers who bypass the comment form. Simply activate and you're away!
Author: Ryan McCue
Author URI: http://cubegames.net/
Version: 0.2
*/

function rscv_add_nonce() {
	wp_nonce_field('rscv-check_comments', '_rscv_nonce', false);
}

function rscv_check_nonce($content) {
	/** Thanks to Mark Jaquith for the idea */
	check_admin_referer('rscv-check_comments', wp_verify_nonce($_POST['_rscv_nonce']));
}

function rscv_explain(){
	return 'Your attempt to add this comment has failed.';
}

add_action('comment_form', 'rscv_add_nonce');
add_action('pre_comment_approved', 'rscv_check_nonce');
add_action('explain_nonce_rscv-check_comments', 'rscv_explain');