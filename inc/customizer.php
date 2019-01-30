<?php
/**
 * Time Tells Tech Theme Customizer
 *
 * @package Time_Tells_Tech
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function time_tells_tech_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'time_tells_tech_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'time_tells_tech_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'time_tells_tech_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function time_tells_tech_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function time_tells_tech_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
