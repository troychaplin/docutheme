<?php
/**
 * Enqueue theme styles.
 *
 * @package docutheme
 */
function themeslug_enqueue_styles() {
    wp_enqueue_style( 'themeslug-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_styles' );

/**
 * Add support for editor styles.
 *
 * @package docutheme
 */
function themeslug_add_editor_styles() {
	add_editor_style( get_stylesheet_uri() );
}
add_action( 'after_setup_theme', 'themeslug_add_editor_styles' );

/**
 * Enqueue block styles for the theme.
 *
 * @package docutheme
 */
function docutheme_block_styles() {
	wp_enqueue_block_style( 'core/navigation', array(
		'handle' => 'docutheme-block-core-navigation',
		'src'    => get_theme_file_uri( 'assets/blocks/core-navigation.css' ),
		'path'   => get_theme_file_path( 'assets/blocks/core-navigation.css' )
	) );
}
add_action( 'init', 'docutheme_block_styles' );