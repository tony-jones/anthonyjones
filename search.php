<?php
/**
 * The template for displaying search results pages.
 *
 * @package anthonyjones
 */

get_header(); ?>

	<section id="primary" class="content-area">
	<div class="hide-on-small-only" style="margin-top: 100px;"></div>
		<main id="main" class="site-main" role="main">
      <div class="row">
        <div class="col s10 offset-s1">
		      <?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'anthonyjones' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

					<?php else : ?>

					<?php get_template_part( 'content', 'none' ); ?>

					<?php endif; ?>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->
  <div class="footer-padding"></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
