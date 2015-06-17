<?php
/**
 * Template Name: Left Sidebar Page Template
 *
 * @package anthonyjones
 */

get_header(); ?>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

  <div id="primary" class="content-area">
    <div id="writing-page" class="hide-on-small-only"></div>
    <div id="writing-page-mobile" class="hide-on-med-and-up"></div>
    <main id="main" class="site-main" role="main">
      <?php $c = 0; $style = '';
      if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
        $c++; 
        if( $c == 1) {
          $style = 'first';
          $text = 'orange-text';
        }
        else if( $c == 2) {
          $style = 'second';
          $text = 'blue-text';
        }
        else if( $c == 3) {
          $style = 'third';
          $text = 'red-text';
        }
        else if( $c == 4) {
          $style = 'fourth';
          $text = 'green-text';
        }
        else if( $c == 5) {
          $style = 'fifth';
          $text = 'purple-text';
        }
        elseif ( $c == $wp_query->post_count ) {
          $style='fifth';
        }
        ?>
      <article <?php post_class($style);?> id="post-<?php the_ID(); ?>">

      <?php
        /* Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );
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
