<?php
/**
 * Template Name: Left Sidebar Page Template
 *
 * @package anthonyjones
 */

get_header(); ?>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <div id="content" data-0="padding-top: 150px; margin-top: 63px;" data-192="padding-top: 190px; margin-top: -39.28125px;">
      <?php if ( have_posts() ) : ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

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

      
        <div class="container">
        <div class="row no-padding">
          <div class="blog-link">
            <div class="blog-item col s12 m10 offset-m1">
              <a href="#">
                <div class="col s6 m5">
                  <h2 class="orange-text">Designing accessible experiences</h2>
                  <h5 class="grey-text">Mobile accessibility study conducted with blind users at Cardinal Solutions</h5>
                  <span class="date grey-text">Feb 19</span><br>
                  <span class="readingTime grey-text">4 min read</span>
                </div>
                <div class="col s5 m7">
                  <p style="color: #787f8c; font-size: 1.2em;">“So what’s the secret behind Slack? What did you guys do that was so special?” the voice crackled over my car’s Bluetooth, “I want you guys to do whatever you did for them.” I was on a call with a prospective client, the CEO of a successful SaaS app who wanted to hire us to redesign...</p>
                </div>
              </a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
