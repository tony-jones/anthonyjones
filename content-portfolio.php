<?php
/**
 * @package anthonyjones
 */
?>
  <?php
  $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  $terms_as_text = get_the_term_list( $post->ID, 'portfolio_category', '', ', ', '' ) ;
  if (class_exists('MultiPostThumbnails')) :
    $thumbnail_url = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'secondary-image');
  endif; 
  ?>

  <div class="container">
    <div class="row no-padding">
      <div class="blog-link">
        <div class="hoverable portfolio-blog-item no-padding col s12 m12 l10 offset-l1">
          <a class="waves-effect portfolio-article-link" href="<?php echo get_permalink(); ?>">
            <div class="col s12 m6" style="padding: 15px 25px 30px 40px;">
              <h3 itemprop="headline" class="<?php echo strip_tags($terms_as_text); ?> light"><?php the_title(); ?></h3>
              <h5 style="line-height: 1.52rem;" class="grey-text light"><?php the_excerpt(); ?></h5> 
              <?php get_the_terms( $post->ID, 'portfolio_category', '', ' / ' ); ?>    
              <span class="<?php echo strip_tags($terms_as_text); ?> badge">
              <?php echo strip_tags($terms_as_text); ?></span>
            </div>
            <div class="col s12 m6 no-padding">
              <div class="bg-img-half" style="background-image: url('<?php echo $thumbnail_url; ?>')">
              </div>
             
              <!-- <img style="min-width: 413px;" class="border-radius-image-mobile border-radius-right-image responsive-img" src="<?php echo $url; ?>"> -->
              <?php
               wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'anthonyjones' ),
                'after'  => '</div>',
               ) );
              ?>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
<br>
</article><!-- #post-## -->

