<?php get_header(); ?>
<main>
  <div class="post-container">
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- Posts handler -->
        <?php if ( !is_page() ):?>
          <article class="post-card">
            <?php if (has_post_thumbnail()) : ?>
              <div
                class="post-thumbnail"
                style="background-image: url('<?php the_post_thumbnail_url(); ?>')"
              >
              </div>
            <?php endif; ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <p>
              <?php the_excerpt(); ?>
            </p>
            <div class="f-row center" style="margin-top: auto;">
              <a class="button-46" href="<?php the_permalink(); ?>">więcej</a>
            </div>
          </article>
        <? else: ?>
          <!-- Pages handler -->
          <?php the_content(); ?>
        <?php endif; ?>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>