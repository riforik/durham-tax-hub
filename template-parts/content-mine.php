<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Time_Tells_Tech
 */

?>

<article id="main-section post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h4 class="entry-title">', '</h4>' );
		else :
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;
	 ?>
	 <div id="map-section">
		 <div id="map-list">
			 <div class="map-list-option" data-id="0" data-name='divFinGrp'>
				 <h3>Diverse Financial Group</h3>
 				<h4>190 Harwood Avenue South (inside G Centre), Ajax</h4>
			 </div>
			 <div class="map-list-option" data-id="1" data-name='durhamComLegClin'>
				 <h3>Durham Community Legal Clinic</h3>
 				<h4>200 John Street West, Unit B1, Oshawa</h4>
			 </div>
		 </div>

		 <div id="map-box">
		 	<div id="leafletMap"></div>
		 </div>

		 <div id="map-info">
		 	<h1>Diverse Financial Group</h1>
			<h2>190 Harwood Avenue South (inside G Centre), Ajax</h2>
			<p>By apointment only</p>
			<p>Current and prior year returns</p>
			<p>call 647-887-8725</p>
		 </div>
	 </div>

 </section><!-- .entry-header -->
