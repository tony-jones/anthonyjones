<?php
/**
 * The template for displaying the social sharing.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package anthonyjones
 */
?>

<div class="fixed-action-btn hide-on-small-only" style="bottom: 64px; right: 24px;">
    <a class="btn-floating btn-large grey darken-3">
      <i class="large mdi-social-share"></i>
    </a>
    <ul style="bottom: 40px;">
      <li><a href="https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=<?php the_permalink() ?>" target="_new" class="tooltipped btn-floating red" title="Share on Google +" data-position="left" data-delay="10" data-tooltip="Share on Google+"><i class="fa fa-google-plus"></i></a></li>
      <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&summary=&source=<?php bloginfo('name'); ?>" target="_new" class="tooltipped btn-floating blue darken-1" title="Share on Linkedin" data-position="left" data-delay="50" data-tooltip="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li>
      <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" target="_new" class="tooltipped btn-floating indigo" title="Share on Facebook" data-position="left" data-delay="50" data-tooltip="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&tw_p=tweetbutton&url=<?php the_permalink(); ?>&via=<?php bloginfo( 'name' ); ?>" target="_new" class="tooltipped btn-floating blue lighten-1" title="Share on Twitter" data-position="left" data-delay="50" data-tooltip="Share on Twitter"><i class="fa fa-twitter"></i></a></li>
    </ul>
</div>
