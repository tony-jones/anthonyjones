<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?><header>
  <h1><?php the_title(); ?></h1>
</header>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>