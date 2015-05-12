<?php
/**
 * @package anthonyjones
 */
?>

  <div class="container">
		<div class="row no-padding">
		  <div class="blog-link">
		    <div class="blog-item col s12 m12 l10 offset-l1">
		      <a href="<?php echo get_permalink(); ?>" style="cursor: pointer; display: block; overflow: hidden; padding: 50px;">
		        <div class="col s12 m6">
		          <h5><?php the_title(); ?></h5>
		          <!-- <h6 class="grey-text"><?php get_the_subtitle( $post ); ?></h6> -->
		          <!-- <br> -->
		          <?php if ( 'post' == get_post_type() ) : ?>
		          <span class="date grey-text"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></span><br>
		          <span class="readingTime grey-text"><?php post_read_time(); ?></span>
		          <?php endif; ?>
		        </div>
		        <div class="col s12 m6">
		          <?php the_excerpt(); ?>
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
	<footer class="entry-footer">
		<?php anthonyjones_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

