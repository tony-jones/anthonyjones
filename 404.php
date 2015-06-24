<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package anthonyjones
 */

get_header(); ?>

<div id="primary" class="content-area">
  <div class="hide-on-small-only" style="margin-top: 100px;"></div>
		<div class="row">
      <div class="col s12 m10 l10 offset-m1 offset-l1 ">
		    <main id="main" class="site-main" role="main">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title thin"><?php _e( 'Sorry, but I could not find that page on my website.', 'anthonyjones' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<h5 class="thin"><?php _e( 'But I do have this search box for your convenience', 'anthonyjones' ); ?></h5>

							<?php get_search_form(); ?>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</main><!-- #main -->
      </div>
    </div>
</div><!-- #primary -->

<?php get_footer(); ?>
