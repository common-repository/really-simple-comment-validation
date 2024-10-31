=== Plugin Name ===
Contributors: rmccue
Donate link: http://cubegames.net/
Tags: comments, spam
Requires at least: 2.1
Tested up to: 2.5.1
Stable tag: 0.2

Adds a nonce field to the comment form to deter some comment spammers who bypass the comment form.

== Description ==

Many spammers bypass the comment form and send requests to the WordPress backend directly. This plugin creates a "nonce" field for your comment form, similar to the ones used in the administration backend.

== Installation ==

1. Upload `rscv/` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Troubleshooting ==

RSCV not working? Use the following steps to try and solve the problem.

1. Make sure `<?php do_action('comment_form'); ?>` is in your template's comments.php, inside the `<form>` tags.
2. Still not working? Ask on the forums.

== Frequently Asked Questions ==

= How do I use this plugin? =

Simply activate the plugin and it will get to work straight away. You don't have to do anything else.