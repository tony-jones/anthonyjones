<?php
/**
 * Template Name: Left Sidebar Page Template
 *
 * @package anthonyjones
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || get_comments_number() ) :
            comments_template();
          endif;
        ?>

      <?php endwhile; // end of the loop. ?>

      <div id="content" data-0="padding-top: 150px; margin-top: -63px;" data-192="padding-top: 190px; margin-top: -39.28125px;">
      <div class="container">
        <div class="row">
          <div class="col s12 m8 l6 offset-m2 offset-l1">
            <div style="border-bottom: 1px solid rgba(0,0,0,0.05); padding: 20px 0px 20px 0px">
              <img class="responsive-img" src="https://d262ilb51hltx0.cloudfront.net/fit/t/800/240/1*bSaHQ6YRyGNbnzbzQJ2Y7A.jpeg">
              <div class="collection-item">Feb 19
                <a href="#!"><span class="new badge">design</span></a>
              </div>
              <h2 class="black-text" style="margin: 8px 0px 0px 0px;">Designing accessible experiences is important! </h2>
              <h5 class="grey-text" style="margin-top: 0px;">Mobile accessibility study conducted with blind users at Cardinal Solutions</h5>
              <p>
                As more and more of our users and content move to mobile as the primary medium, it becomes critical that we design good mobile user experiences. Taking into consideration the differences in interactions and control methods 
              </p>
              <a href="#" class="teal-text">Continue reading</a>&nbsp;
              <span class="readingTime grey-text">4 min read</span>
            </div>
            <div style="border-bottom: 1px solid rgba(0,0,0,0.05); padding: 20px 0px 20px 0px">
              <img class="responsive-img" src="https://d262ilb51hltx0.cloudfront.net/fit/t/1600/480/1*tggdvHXv7Msm1-spLYVinA.jpeg">
              <div class="collection-item">Feb 19
                <a href="#!"><span class="new badge">design</span></a>
              </div>
              <h2 class="black-text" style="margin: 8px 0px 0px 0px;">Designing accessible experiences is important! </h2>
              <h5 class="grey-text" style="margin-top: 0px;">Mobile accessibility study conducted with blind users at Cardinal Solutions</h5>
              <p>
                As more and more of our users and content move to mobile as the primary medium, it becomes critical that we design good mobile user experiences. Taking into consideration the differences in interactions and control methods 
              </p>
              <a href="#" class="teal-text">Continue reading</a>&nbsp;
              <span class="readingTime grey-text">4 min read</span>
            </div>
            <div style="border-bottom: 1px solid rgba(0,0,0,0.05); padding: 20px 0px 20px 0px">
              <img class="responsive-img" src="https://d262ilb51hltx0.cloudfront.net/fit/t/1600/480/1*sYLl2wF7ApZ6qGriiMFVlw.jpeg">
              <div class="collection-item">Feb 19
                <a href="#!"><span class="new badge">design</span></a>
              </div>
              <h2 class="black-text" style="margin: 8px 0px 0px 0px;">Designing accessible experiences is important! </h2>
              <h5 class="grey-text" style="margin-top: 0px;">Mobile accessibility study conducted with blind users at Cardinal Solutions</h5>
              <p>
                As more and more of our users and content move to mobile as the primary medium, it becomes critical that we design good mobile user experiences. Taking into consideration the differences in interactions and control methods 
              </p>
              <a href="#" class="teal-text">Continue reading</a>&nbsp;
              <span class="readingTime grey-text">4 min read</span>
            </div>
            <div style="border-bottom: 1px solid rgba(0,0,0,0.05); padding: 20px 0px 20px 0px">
              <img class="responsive-img" src="https://d262ilb51hltx0.cloudfront.net/fit/t/1600/480/1*9yDGld-FnFZCCcntTT75yg.jpeg">
              <div class="collection-item">Feb 19
                <a href="#!"><span class="new badge">design</span></a>
              </div>
              <h2 class="black-text" style="margin: 8px 0px 0px 0px;">Designing accessible experiences is important! </h2>
              <h5 class="grey-text" style="margin-top: 0px;">Mobile accessibility study conducted with blind users at Cardinal Solutions</h5>
              <p>
                As more and more of our users and content move to mobile as the primary medium, it becomes critical that we design good mobile user experiences. Taking into consideration the differences in interactions and control methods 
              </p>
              <a href="#" class="teal-text">Continue reading</a>&nbsp;
              <span class="readingTime grey-text">4 min read</span>
            </div>
          </div>
          <div class="col l4 hide-on-med-and-down" style="height:500px;">
            <h3>Featured Tags</h3>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">Design</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">Accessibility</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">Development</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">Business</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">Freebie</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">Higher Ed</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">Apple</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">Freelancing</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">UX</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">UI</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">Javascript</button>
            <button style="display: inline; font-size:10px; padding: 0 1rem;" class="waves-effect waves-light btn">HTML</button>
          </div>
        </div>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
