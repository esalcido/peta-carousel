<?php 
/**
 * Plugin Name: Carousel of Posts
 * Author: Edward Salcido
 * Description: This plugin displays a carousel of posts. There is a total of 9 posts with 3 visible at a time and user can scroll 3 at a time using next and back arrows.  Each Post displays featuired image, title and date. 
 *
 * Version: 1.0.0
 */

add_action( 'enqueue_block_editor_assets', 'gb_block_01_basic_editor_assets' );

function gb_block_01_basic_editor_assets() {
	// Scripts.
	wp_enqueue_script(
		'gb-block-01-basic',
		plugins_url( 'block.js', __FILE__ ),
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' )
	);

	// Styles.
	wp_enqueue_style(
		'gb-block-01-basic-editor',
		plugins_url( 'editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __FILE__ ) . 'editor.css' )
	);
}