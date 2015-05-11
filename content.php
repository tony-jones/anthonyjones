<?php
/**
 * @package anthonyjones
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<h4><?php get_the_subtitle( $post ); ?></h4>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php anthonyjones_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt();
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'anthonyjones' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php anthonyjones_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->