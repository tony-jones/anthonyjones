<?php
/**
 * The template for displaying all single posts.
 *
 * @package anthonyjones
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

      <div class="container">
		    <div class="row">
		      <div class="col s12 m12 l8 offset-l2">
		        <?php the_writing_navigation();  ?>
		      </div>
		    </div>
		  </div>
			
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
