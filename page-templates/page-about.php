<?php
/**
 * Template Name: About Page Template
 *
 * This is the template that displays the about(home) page
 * of the blog.
 *
 * @package anthonyjones
 */

get_header(); ?>
   
  <div id="primary" class="content-area">
    <main id="content" style="margin-top:-62px;" class="site-main" role="main">
      <?php
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>
        <div class="section no-pad-bot" id="index-banner" style="background-position: center top;
                                                                 background: linear-gradient( 
                                                                  rgba(0, 0, 0, 0.15), 
                                                                  rgba(0, 0, 0, 0.15) ), 
                                                                 url('<?=$url?>');
                                                                 background-repeat: no-repeat;
                                                                 background-color: grgulp serve
                                                                 ;
                                                                 background-attachment: scroll;
                                                                 background-size: cover;
                                                                 -o-background-size: cover;">
          <div class="container">
            <div class="heading">
              <h1 class="header center white-text">Anthony Jones</h1>
              <div class="row center">
                <h5 class="header col s12 light white-text">Universal Design Advocate</h5>
              </div>
              <div class="container">
                <div class="row center">
                  <div class="col s12 m6 l8 offset-m3 offset-l2">
                    <div class="social-media">
                      <ul style="display: inline-flex;">
                        <li style="margin-right: 20px;">
                          <a href="https://twitter.com/iamtonybagels" class="blue lighten-1 my-social waves-effect waves-circle waves-light btn-floating">
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                        <li style="margin-right: 20px;">
                          <a href="https://github.com/tony-jones" class="red darken-4 my-social waves-effect waves-circle waves-light btn-floating">
                            <i class="fa fa-github"></i>
                          </a>
                        </li>
                        <li style="margin-right: 20px;">
                          <a href="https://www.linkedin.com/profile/view?id=118712118&trk=hp-identity-photo" class="blue darken-2 my-social waves-effect waves-circle waves-light btn-floating">
                            <i class="fa fa-linkedin-square"></i>
                          </a>
                        </li>
                        <li>
                          <a style="color:#3f729b;" href="https://instagram.com/iamtonybagels" class="black darken-1 my-social waves-effect waves-circle waves-light btn-floating">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br><br>
          </div>
        </div>
      <div class="container white">
        <div class="section">
          <div class="row">
            <div class="col s12 m10 l8 offset-m1 offset-l2 center">
              <h3><i style="font-size:45px" class="mdi-action-accessibility"></i></h3>
              <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'content', 'page' ); ?>
              <?php endwhile; // end of the loop. ?>
            </div>
          </div>
        </div>
      </div> 
      <div class="container grey lighten-2">
        <div class="section">
          <div class="row">
          <h2 class="center">Some of the tool I used in making this site</h2>
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="http://cdn.himpfen.com/post/sass.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">SASS <i class="mdi-navigation-more-vert right"></i></span>
                <p><a href="#">Visit SASS</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">SASS <i class="mdi-navigation-close right"></i></span>
                <p>Sass is the most mature, stable, and powerful professional grade CSS extension language in the world</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="https://cask.scotch.io/2015/01/gulp.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Gulp <i class="mdi-navigation-more-vert right"></i></span>
                <p><a href="#">Visit Gulp</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Gulp <i class="mdi-navigation-close right"></i></span>
                <p>Gulp is a build system that can improve how you develop websites by automating common tasks.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="http://s.7learn.com/uploads/2015/01/materialize.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Materialize <i class="mdi-navigation-more-vert right"></i></span>
                <p><a href="#">Visit Materialize</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Materialize <i class="mdi-navigation-close right"></i></span>
                <p>Materialize is a modern responsive front-end framework based on Material Design.</p>
              </div>
            </div>
          </div>
           
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="http://www.headzeal.com/wp-content/uploads/2014/04/wordpress.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">WordPress <i class="mdi-navigation-more-vert right"></i></span>
                <p><a href="#">Visit WordPress</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Materialize <i class="mdi-navigation-close right"></i></span>
                <p>WordPress is probably the easiest and most flexible website content management systems</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="http://yubinbai.com/wp-content/uploads/2015/01/sublime-text-2-logo.jpg">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Sublime Text <i class="mdi-navigation-more-vert right"></i></span>
                <p><a href="#">Visit Sublime Text</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Sublime Text <i class="mdi-navigation-close right"></i></span>
                <p>Sublime is my favorite text editor for code and markup. Lots of great plugins and is a good complement to an IDE.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card small">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="http://public2.bemyapp.com/media/wp-content/uploads/2014/07/headroomjs-logo.png">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Headroom.JS <i class="mdi-navigation-more-vert right"></i></span>
                <p><a href="#">Visit Headroom.JS</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Headroom.JS <i class="mdi-navigation-close right"></i></span>
                <p>A simple plugin that hides the header on scroll down for a better user experience</p>
              </div>
            </div>
          </div>
          
          </div>
        </div>
      </div>
       
      <div class="contact container">
        <div class="section" style="height: 215px;">
          <div class="row">
            <div class="col s12 m10 l8 offset-m1 offset-l2 center">
              <h4> Feel free to send me email. I'll do my best to get back to you quickly! </h4> <br>
              <a class="btn grey darken-1" onclick="Materialize.toast('hello@anthonyjones.me', 4000)">Contact Me</a>
              <br><br>
            </div>
          </div>
        </div> 
      </div>  
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>