<?php
/**
 * The template for displaying portfolio archive pages.
 *
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div class="hide-on-small-only" style="margin-top: 130px;"></div>
    <main id="main" class="site-main">
      
      <?php
      $args = array(
        'post_type' => 'portfolio',
      );
      $query = new WP_Query( $args );
      ?>

      <?php if ( $query->have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <?php
          /* Include the Post-Format-specific template for the content.
           * If you want to override this in a child theme, then include a file
           * called content-___.php (where ___ is the Post Format name) and that will be used instead.
           */
          get_template_part( 'content', 'portfolio');
        ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'content', 'none' ); ?>

    <?php endif; ?>
  
    </main><!-- #main -->
  </div><!-- #primary -->
 
<?php get_sidebar(); ?>
<div class="footer-padding"></div>
<?php get_footer(); ?>
