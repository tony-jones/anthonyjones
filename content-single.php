<?php
/**
 * @package anthonyjones
 */
?>

  <!-- Set your background image for this header on the line below. -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <main role="main">
      <div id="content" style="margin-top: -100px;">
        <?php
			  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			  ?>
        <div class="section no-pad-bot" id="index-banner" style="background-position: center top;
																																 background: linear-gradient( 
																																  rgba(0, 0, 0, 0.3), 
																																  rgba(0, 0, 0, 0.3) ), 
																																 url('<?=$url?>');
																																 background-repeat: no-repeat;
																																 background-color: grey
																																 ;
																																 background-attachment: scroll;
																																 background-size: cover;
																																 -o-background-size: cover;">
          <div class="container">
            <div class="heading">
              <div class="badges center">
              <?php echo get_the_category_list(', '); ?>
              </div>
              <h1 class="header center white-text"><?php the_title(); ?></h1>
              <div class="row center">
                <h5 class="header col s12 light white-text"><?php get_the_subtitle( $post ); ?></h5>
              </div>
              <div class="post-details center">
                <span class="date updated white-text">
                  <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?>
                </span>
                
                <span class="bullet white-text">&nbsp;•&nbsp;</span>
                <span class="author vcard white-text">
                by <a class="white-text" title="" rel="author"><?php the_author(); ?></a>                      
                </span>
                <span class="bullet white-text">&nbsp;•&nbsp;</span>
                <a class="white-text" href="#disqus_thread"> <?php echo $post->comment_count?> <i class="fa fa-comments"></i> Comments</a> 
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
                <div class="row">
                  <div class="badges inverse right">
                    <?php
                      $tags_list = get_the_tag_list( '', __( '', 'anthonyjones' ) );
                      if ( $tags_list ) {
                        printf( '<span class="tags-links">' . __( '%1$s', 'anthonyjones' ) . '</span>', $tags_list );
                      }
                    ?>
                  </div> 
                  <div class="badges inverse large left">
                    <a class="waves-effect my-post-like" data-id="<?php the_ID(); ?>">
                      <i class="fa fa-thumbs-o-up"></i> Like
                      <span class="like-count"><?php display_post_likes( get_the_ID() ); ?></span>
                    </a>
                  </div>
                  <div class="badges inverse large left">
                    <!-- Modal Trigger -->
                    <a href="#modal1" class="waves-effect modal-trigger"><i class="fa fa-share"></i> Share</a>
                  </div>
                </div>
                 <br>
              </div>    
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

   

								    



		
