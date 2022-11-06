<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nm_gutenberg
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'NM_GUTENBERG_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function nm_gutenberg_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( './assets/css/app.css' );
}
add_action( 'after_setup_theme', 'nm_gutenberg_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function nm_gutenberg_styles() {
	wp_enqueue_style(
		'nm_gutenberg-style',
		get_stylesheet_uri(),
		[],
		GUTENBERG_VERSION
	);
	wp_enqueue_style(
		'nm_gutenberg-shared-styles',
		get_theme_file_uri( 'assets/css/app.css' ),
		[],
		GUTENBERG_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'nm_gutenberg_styles' );


// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// Allow SVG upload
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

// Google Fonts
function customfonts(){
echo '<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">';
}
add_action('wp_head', 'customfonts');
