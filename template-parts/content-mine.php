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
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;
	 ?>
	 <div id="map-section">
		 <div id="map-list">
		  <ul>
		 	 <li>one</li>
		 	 <li>two</li>
		 	 <li>three</li>
		  </ul>
		 </div>
		 
		 <div id="map-box">
		 	<div id="leafletMap"></div>
		 </div>

		 <div id="map-info">
		 	<h1>Title</h1>
			<h2>Address</h2>
			<h3>more info</h3>
		 </div>
	 </div>

 </section><!-- .entry-header -->
