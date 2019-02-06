<?php
/**
 * Time Tells Tech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Time_Tells_Tech
 */

 /**
  * Theme Setup
  */
	require get_template_directory() . '/inc/setup.php';

/**
 * Enqueue scripts and styles.
 */
function time_tells_tech_scripts() {
	wp_enqueue_style( 'time-tells-tech-style', get_stylesheet_uri() );
	// name is the file name, then followed by getting the location of the file, no array dependencies, and version
	// https://developer.wordpress.org/reference/functions/wp_enqueue_style/
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/vendor/slick.css', array(), '1.8.1' );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/vendor/slick-theme.css', array(), '1.8.1' );
	wp_enqueue_style( 'leaflet-css', get_template_directory_uri() . '/assets/css/vendor/leaflet.css', array(), '1.4.0' );
	wp_enqueue_style( 'app-css', get_template_directory_uri() . '/assets/css/app.css', array(), null );

	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/vendor/slick.js', array( 'jquery' ), '1.8.1', true );
	wp_enqueue_script( 'leaflet-js', get_template_directory_uri() . '/assets/js/vendor/leaflet.js', array( 'jquery' ), '1.4.0', true );
	wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'time_tells_tech_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
