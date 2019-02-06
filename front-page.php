<?php
/**
 * The template for displaying front pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Time_Tells_Tech
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
			if ( function_exists( 'get_field' ) ) {
				$featured_slider = get_field( 'featured_slider' );
				?>
				<div class="slider">


				<?php
				foreach ( $featured_slider as $featured_slide ) {
					$header = $featured_slide['heading'];
					$content = $featured_slide['content'];
					$image = $featured_slide['image'];
					// var_dump( $image );
					?>
					<!-- <div class="slider"> -->
            <div class="slide" style="background-image: url(<?php echo $image['url'] ?>);">
            <h1><?php echo $header; ?></h1>
            <p><?php echo $content; ?></p>
            <p><?php echo $image; ?></p>
          </div>
					<?php
				}
				?>
				</div>
				<?php
				// var_dump( $featured_slider );
			}
		?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
