<?php
/**
 * @package anthonyjones
 */
?>

  <!-- Set your background image for this header on the line below. -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <main role="main">
      <div id="content" style="margin-top: -60px;">
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
              <h1 class="header center white-text"><?php the_title(); ?></h1>
              <div class="row center">
                <h5 class="header col s12 light white-text"><?php get_the_subtitle( $post ); ?></h5>
              </div>
            </div>
            <br><br>
          </div>
        </div>
  		
        <!-- Post Content -->
        <div class="container">
          <div class="row">
            <div class="image-caption center-align">
              <?php echo the_post_thumbnail_caption(); ?>
            </div>
            <div class="col s12 m9 l8 offset-l2">
              <?php get_template_part('share'); ?>   
              <div class="container">
	              <div class="flow-text">
	               
	                <?php the_content(); ?>
	                <?php
										wp_link_pages( array(
											'before' => '<div class="page-links">' . __( 'Pages:', 'anthonyjones' ),
											'after'  => '</div>',
										) );
									?>
	              </div> <!-- .entry-content -->
                <br>
                <div class="center">
                  <a class="waves-effect waves-light btn red"><i class="fa fa-google-plus left"></i>Share</a>
                  <a class="waves-effect waves-light btn blue darken-2"><i class="fa fa-facebook left"></i>Share</a>
                  <a class="waves-effect waves-light btn blue darken-3"><i class="fa fa-linkedin left"></i>Share</a>
                </div>
              </div>
              <br><br> 
            </div>  
            <div class="col hide-on-small-only m2 l2">
		          <div class="tabs-wrapper">
					      <ul class="section table-of-contents">
					        <li><a href="#introduction">Rules</a></li>
					        <li><a href="#structure">Design</a></li>
					        <li><a href="#initialization">Download</a></li>
					      </ul>
					    </div>
				    </div> 
          </div>        
        </div> <!-- End Post Content -->
      </div>
    </main>

    <footer class="entry-footer">
		  <?php anthonyjones_entry_footer(); ?>
	  </footer><!-- .entry-footer -->

  </article> <!-- #post-## -->

   

								    



		
