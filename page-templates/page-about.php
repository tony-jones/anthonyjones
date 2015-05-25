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
    <main style="margin-top:-100px;" class="site-main" role="main">
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
      <div class="container">
        <div class="section">
          <!--   Icon Section   -->
          <div class="row">
          <div class="col s12 m10 l8 offset-m1 offset-l2">
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center black-text"><i class="mdi-av-web"></i></h2>
                <h5 class="center">Interface Design</h5>
                <p class="light">Great user interface goes deeper than pretty pixels. We create interfaces that are delightful and intuitive.</p>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center black-text"><i class="mdi-social-mood"></i></h2>
                <h5 class="center">User Experience</h5>
                <p class="light">Every interface needs a solid foundation. Well-executed UX exposes and helps us diagnose design challenges before they become problems.</p>
              </div>
            </div>
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center black-text"><i class="mdi-device-developer-mode"></i></h2>
                <h5 class="center">Development</h5>
                <p class="light">We love bringing our concepts to life, whether it's on the web, desktop, mobile, or all three, using a variety of languages and platforms.</p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="container">
        <div class="section">
         <div class="row">
            <div class="col s12 m10 l8 offset-m1 offset-l2">
              <h4 class="center"> My Recent Positions </h4>
              <br>
              <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header"><img src="/wp-content/uploads/2015/05/virginia.png" alt="uva" width="60">  &nbsp; UI UX Designer & Developer</div>
                  <div class="collapsible-body">
                    <div class="collapsible-headings">
                      <h4 class="orange-text">University of Virginia</h4>
                      <h6 class="grey-text">February 2014 – Present</h6>
                    </div>
                    <p> I design & develop user interfaces and custom software 
                      applications with some awesome people in our Library IT and 
                      Communications teams , designed to enhance user appeal, accessibility, 
                      and overall functionality. Technologies I frequent are Rails, jQuery, 
                      Polymer, Bootstrap, SASS, and WordPress.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header"><img src="/wp-content/uploads/2015/05/csc.png" alt="uva" width="40">  &nbsp; Front-End Engineer</div>
                  <div class="collapsible-body">
                    <div class="collapsible-headings">
                      <h4 class="red-text">Computer Sciences Corporation (CSC)</h4>
                      <h6 class="grey-text">January 2013 – February 2014</h6>
                    </div>
                    <p> On this project, I worked closely with a cross-functional team that includes engineers, product managers, 
                      and business analysts to build New York's Health Benefit Exchange <a href="http://nysoh.ny.gov">NY State of Health</a>
                    </p>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header"><img src="/wp-content/uploads/2015/05/csc.png" alt="uva" width="40">  &nbsp; Java Web Developer</div>
                  <div class="collapsible-body">
                    <div class="collapsible-headings">
                      <h4 class="red-text">Computer Sciences Corporation (CSC)</h4>
                      <h6 class="grey-text">September 2012 – January 2013</h6>
                    </div>
                    <p> I provided a service-oriented architecture (SOA)-compliant for the construction of NYS's Health Benefit Exchange system. 
                      Our major goal is to cover uninsured consumers, thus helping to create a healthier community and reducing overall healthcare costs.
                    </p>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header"><img src="/wp-content/uploads/2015/05/csc.png" alt="uva" width="40">  &nbsp; Programmer Analyst Associate Professional</div>
                  <div class="collapsible-body">
                    <div class="collapsible-headings">
                      <h4 class="red-text">Computer Sciences Corporation (CSC)</h4>
                      <h6 class="grey-text">June 2011 – September 2012</h6>
                    </div>
                    <p> Implemented programs and features for NYS’s Medicare and Medicaid system using Java EE architecture and IBM Rational Tools.
                    </p>
                  </div>
                </li>
                <li>
                <div class="collapsible-header"><img src="/wp-content/uploads/2015/05/csc.png" alt="uva" width="40">  &nbsp; System Engineer Senior Assistant</div>
                  <div class="collapsible-body">
                    <div class="collapsible-headings">
                      <h4 class="red-text">Computer Sciences Corporation (CSC)</h4>
                      <h6 class="grey-text">August 2010 – May 2011</h6>
                    </div>
                    <p> Implemented, monitored, reporting day-to-day run and maintain engineering activities in multiple RDC Lines of Service 
                     (Security, Architecture, Wintel, CNS (Network), Production Operations).  Provided assistant to CSC’s Global Security Solutions and was involved in security scans, 
                     user permissions, and various security tools like Backtrack (via VMware).
                    </p>
                  </div>
                </li>
              </ul>
              <br>
            </div>
          </div>
        </div>
      </div> 
      <div class="container grey lighten-2">
        <div class="section">
          <div class="row">
          <div class="col s12 m10 l8 offset-m1 offset-l2">
          <h2 class="center">Some of the tools I used in making this site</h2>

          <div class="row">
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
                  <p>Materialize is a modern responsive front-end framework based on Google's Material Design principles.</p>
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
                  <p>Sublime is my favorite text editor for code and markup. Great plugins, user friendly, and very customizable</p>
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
  
      <div class="contact container">
        <div class="section">
          <div class="center">
            <h4> Feel free to send me email. I'll do my best to get back to you quickly! </h4> <br>
            <a class="btn grey darken-1" onclick="Materialize.toast('hello@anthonyjones.me', 4000)">Contact Me</a>
          </div>
        </div> 
      </div>  
      <div class="footer-padding"></div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>