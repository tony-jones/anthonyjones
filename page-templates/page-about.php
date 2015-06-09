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
    <main class="about-bg site-main" role="main">
      <?php
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        ?>
        <div class="section no-pad-bot" id="index-banner" style="background-position: center top;
                                                                 background: linear-gradient( 
                                                                  rgba(0, 0, 0, 0.15), 
                                                                  rgba(0, 0, 0, 0.15) ), 
                                                                 url('<?=$url?>');
                                                                 background-repeat: no-repeat;
                                                                 background-color: grey;
                                                                 background-attachment: scroll;
                                                                 background-size: cover;
                                                                 -o-background-size: cover;">
          <div class="container">
            <div class="heading">
              <h1 class="light header center white-text">Anthony Jones</h1>
              <div class="center">
                <h5 class="header col s12 light white-text">Universal Design Advocate</h5>
              </div>
                <div class="center">
                  <div class="col s12 m6 l8 offset-m3 offset-l2">
                    <div class="social-media">
                      <ul class="social-icons">
                        <li style="margin-right: 20px;">
                          <a href="https://twitter.com/iamtonybagels" title="link to visit me on twitter" class="blue lighten-1 my-social waves-effect waves-circle waves-light btn-floating">
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                        <li style="margin-right: 20px;">
                          <a href="https://github.com/tony-jones" title="link to visit me on github" class="red darken-4 my-social waves-effect waves-circle waves-light btn-floating">
                            <i class="fa fa-github"></i>
                          </a>
                        </li>
                        <li style="margin-right: 20px;">
                          <a href="https://www.linkedin.com/pub/anthony-jones/33/90b/186" title="link to visit me on linkedin" class="blue darken-2 my-social waves-effect waves-circle waves-light btn-floating">
                            <i class="fa fa-linkedin-square"></i>
                          </a>
                        </li>
                        <li>
                          <a style="color:#3f729b;" href="https://instagram.com/iamtonybagels" title="link to visit me on instagram   " class="black darken-1 my-social waves-effect waves-circle waves-light btn-floating">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
            <br><br>
          </div>
        </div>
      <div class="home-section white">
        <div class="section card-left-right">
          <div class="row">
            <div class="col s12 m10 l8 offset-m1 offset-l2">
              <!-- <h3 class="center"><i style="font-size:45px" class="mdi-action-accessibility"></i></h3> -->     
              <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
              <?php endwhile; // end of the loop. ?>
            </div>
          </div>
        </div>
      </div>
      <div class="home-section teal">
        <div class="section card-left-right">
          <!--   Icon Section   -->
          <div class="row">
          <div class="col s12 m10 l8 offset-m1 offset-l2">
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center white-text"><i class="mdi-av-web"></i></h2>
                <h5 class="center white-text">Interface Design</h5>
                <p class="center light white-text">Creating great content experiences through design is my goal. I create interfaces that are fun and help users interact with content, but not compete with it.</p>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center white-text"><i class="mdi-social-mood"></i></h2>
                <h5 class="center white-text">User Experience</h5>
                <p class="center light white-text">In the world of opinionated design, I believe that a data-driven UX stratgey is key. I let real data inform my design decisions.</p>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center white-text"><i class="mdi-device-developer-mode"></i></h2>
                <h5 class="center white-text">Development</h5>
                <p class="center light white-text">With a strong background in object-oriented programming, I strive to deliver code that is well-documented, standards compliant, and secure.  </p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="home-section red lighten-1">
        <div class="section">
          <div class="row">
            <div class="col s12 m10 l8 offset-m1 offset-l2">
              <h4 class="light center white-text"> My Recent Positions </h4>
              <br>
              <ul class="z-depth-1 collection">
                <li class="collection-item avatar">
                  <i class="mdi-av-web circle orange"></i>
                  <span class="title">UI/UX Designer & Developer</span>
                  <p>University of Virginia <br>
                   Technologies: Rails, jQuery, Polymer, Bootstrap, SASS, and WordPress
                  </p>
                  <span class="secondary-content"><i class="fa fa-university"></i></span>
                </li>
                <li class="collection-item avatar">
                  <i class="mdi-action-accessibility circle red"></i>
                  <span class="title">Front-End Engineer</span>
                  <p>Computer Sciences Corporation (CSC) <br>
                   Built New York's Health Benefit Exchange <a href="http://www.nystateofhealth.ny.gov"> NY State of Health</a> (UX Team)
                  </p>
                  <span class="secondary-content"><i class="mdi-communication-business"></i></span>
                </li>
                <li class="collection-item avatar">
                  <i class="mdi-device-developer-mode circle red"></i>
                  <span class="title">Java Web Developer</span>
                  <p>Computer Sciences Corporation (CSC) <br>
                     Built New York's Health Benefit Exchange <a href="http://www.nystateofhealth.ny.gov"> NY State of Health</a> (EE Team)
                  </p>
                  <span class="secondary-content"><i class="mdi-communication-business"></i></span>
                </li>
                <li class="collection-item avatar">
                  <i class="mdi-action-bug-report circle red"></i>
                  <span class="title">Programmer Analyst Associate Professional</span>
                  <p>Computer Sciences Corporation (CSC) <br>
                     Built custom applications for New York's <a href="http://www.emedny.org"> Medicare and Medicaid</a> system
                  </p>
                  <span class="secondary-content"><i class="mdi-communication-business"></i></span>
                </li>
                <li class="collection-item avatar">
                  <i class="mdi-hardware-memory circle red"></i>
                  <span class="title">System Engineer Senior Assistant</span>
                  <p>Computer Sciences Corporation (CSC) <br>
                     Departments: Security, Architecture, Wintel, CNS (Network), Production Operations
                  </p>
                  <span class="secondary-content"><i class="mdi-communication-business"></i></span>
                </li>
              </ul>
              <br>
              <div class="center">
                <h6 class="white-text">Visit me on Linkedin for more info.</h6>
                <br>
                <a href="https://www.linkedin.com/pub/anthony-jones/33/90b/186" class="no-visited btn blue darken-1">Linkedin</a>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="home-section orange lighten-1">
        <div class="section">
          <div class="row">
          <div class="col s12 m12 l0">
          <h4 class="light heading-lr-pad white-text center">Some of the tools I used in making this site</h4>
          <br>
          <div class="row card-left-right">
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-content">
                  <span class="card-title black-text">SASS</span>
                  <p>Sass is the most mature, stable, and powerful CSS extension language out there. But LESS is good also.</p>
                </div>
                <div class="card-action">
                  <a href="http://sass-lang.com/">Visit SASS</a>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-content">
                  <span class="card-title black-text">Gulp</span>
                  <p>Gulp is a build system that can improve how you develop websites by automating common tasks.</p>
                </div>
                <div class="card-action">
                  <a href="http://gulpjs.com/">Visit Gulp</a>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-content">
                  <span class="card-title black-text">Materialize</span>
                  <p>Materialize is a modern responsive front-end framework based on material design principles.</p>
                </div>
                <div class="card-action">
                  <a href="http://materializecss.com/">Visit Materialize</a>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-content">
                  <span class="card-title black-text">WordPress</span>
                  <p>WordPress is one of the easiest and most flexible website content management systems to develop with. </p>
                </div>
                <div class="card-action">
                  <a href="http://wordpress.com/">Visit WordPress</a>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-content">
                  <span class="card-title black-text">Sublime</span>
                  <p>Sublime is my favorite text editor for code and markup (Great plugins, user-friendly, and very customizable).</p>
                </div>
                <div class="card-action">
                  <a href="http://www.sublimetext.com/">Visit Sublime</a>
                </div>
              </div>
            </div>
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-content">
                  <span class="card-title black-text">Skrollr</span>
                  <p>A scrolling animation javascript library. It works well with mobile (Android, iOS, etc.) and desktop screens</p>
                </div>
                <div class="card-action">
                  <a href="https://github.com/Prinzhorn/skrollr">Visit Skrollr</a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
  
      <div class="home-section contact">
        <div class="section card-left-right">
          <div class="center">
            <h5 class="light"> Feel free to send me email. I'll do my best to get back to you quickly! </h5> <br>
            <a href="mailto:hello@anthonyjones.me" class="btn grey darken-1">Contact Me</a>
          </div>
        </div> 
      </div>  
      <div class="footer-padding"></div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>