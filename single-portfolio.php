<?php
/**
 * @package anthonyjones
 */
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?><header>
</header>

<!-- Set your background image for this header on the line below. -->
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/Article">
    <main>
      <div class="content-single-top">
        <?php
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        $terms_as_text = get_the_term_list( $post->ID, 'portfolio_category', '', ', ', '' ) ;
        ?>
        <div class="section no-pad-bot overlay" itemprop="image" content="<?=$url?>" id="index-banner" style="background-image: linear-gradient( 
                                                                                                              rgba(0, 0, 0, 0.19), 
                                                                                                              rgba(0, 0, 0, 0.14) ),
                                                                                                              url('<?=$url?>');
                                                                                                              background-repeat: no-repeat;
                                                                                                              background-attachment: scroll;
                                                                                                              background-position: center top;
                                                                                                              background-size: cover;
                                                                                                              -o-background-size: cover;">
          <div class="container">
            <div class="heading">
              <div class="badges center">
              <a href="#" class="not-active"><?php echo strip_tags($terms_as_text); ?></a>
              </div>
              <h1 itemprop="headline" class="title-padding header center white-text"><?php the_title(); ?></h1>
              <div class="center">
                <h2 itemprop="alternativeHeadline" id="subtitle" class="alt-padding light header col s12 white-text"><?php get_the_subtitle( $post ); ?></h2>
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
            <div class="col s12 m12 l8 offset-l2">
              <?php get_template_part('share'); ?>   
              <div class="container">
                <div class="flow-text" itemprop="articleBody">
                 
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
          </div>        
        </div> <!-- End Post Content -->
      </div>
    </main>

  </article> <!-- #post-## -->
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <?php the_portfolio_navigation();  ?>
      </div>
    </div>
  </div>
<?php comments_template( '', true ); ?>  

<?php endwhile; endif; ?>
<div class="footer-padding"></div>
<?php get_footer(); ?>
                    



    
