<?php
/**
 * Block styles.
 *
 * @package nm_gutenberg
 * @since 1.0.0
 */


/**
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function gutenberg_unregister_block_style() {
	wp_enqueue_script(
		'gutenberg-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		GUTENBERG_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'gutenberg_unregister_block_style' );
