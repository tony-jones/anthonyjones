<?php
/**
 * The template for displaying the social sharing buttons.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package anthonyjones
 */
?>

<?php 
  wp_reset_query();
    global $post;

    if ( isset( $post ) ) {
      $url = urlencode( get_permalink( $post->ID ) );
      $title = urlencode( get_the_title( $post->ID ) );
    } else {
      $url = get_bloginfo( 'url' );
      $title = get_bloginfo( 'name' );
    }
?>

<div class="fixed-action-btn hide-on-small-only">
  <a class="tooltipped btn-floating btn-large grey darken-3" data-position="left" data-delay="50" data-tooltip="Share this Article!">
    <i class="large mdi-social-share"></i>
  </a>
  <ul style="fixed-social-links">
    <li><a href="https://plus.google.com/share?url='<?php echo $url; ?>" target="_blank" class="tooltipped btn-floating red" title="Share on Google +" data-position="left" data-delay="10" data-tooltip="Share on Google+"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $url; ?>&amp;title=<?php echo $title; ?>" target="_blank" class="tooltipped btn-floating blue darken-1" title="Share on Linkedin" data-position="left" data-delay="50" data-tooltip="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="https://www.facebook.com/sharer/sharer.php?u='<?php echo $url; ?>" target="_blank" class="tooltipped btn-floating indigo" title="Share on Facebook" data-position="left" data-delay="50" data-tooltip="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://twitter.com/intent/tweet?text='<?php echo $title; ?>'&amp;url='<?php echo $url; ?>'&amp;via=iamtonybagels" target="_blank" class="tooltipped btn-floating blue lighten-1" title="Share on Twitter" data-position="left" data-delay="50" data-tooltip="Share on Twitter"><i class="fa fa-twitter"></i></a></li>
  </ul>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content center">
    <h6 class="grey-text">Share This Article</h6>
    <h4 class="blue-text text-darken-3"><?php the_title(); ?></h4>
    <h5 class="grey-text text-darken-2"><?php get_the_subtitle( $post ); ?></h5>
    by <a class="grey-text" title="" rel="author"><?php the_author(); ?></a>
    <br><br>
    
    <a href="https://plus.google.com/share?url='<?php echo $url; ?>" target="_blank" class="social-share sharer btn red" title="Share on Google +"><i class="fa fa-google-plus"></i></a>
    <a href="https://www.facebook.com/sharer/sharer.php?u='<?php echo $url; ?>" target="_blank" class="social-share sharer btn blue darken-2" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $url; ?>&amp;title=<?php echo $title; ?>" target="_blank" class="social-share sharer btn blue darken-3" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a>
    <a href="https://twitter.com/intent/tweet?text='<?php echo $title; ?>'&amp;url='<?php echo $url; ?>'&amp;via=iamtonybagels" target="_blank" class="social-share sharer btn blue" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-orange btn-flat">Close</a>
  </div>
</div>