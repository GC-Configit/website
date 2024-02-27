<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <wp-main class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
    <?php if ( !is_page() ):?>
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <section class="entry-meta">
      <p>Posted on <?php the_date();?> by <?php the_author();?></p>
      </section>
    <?php endif; ?>
      <?php the_content(); ?>
  </wp-main>
<?php endwhile; ?>
<?php get_footer(); ?>