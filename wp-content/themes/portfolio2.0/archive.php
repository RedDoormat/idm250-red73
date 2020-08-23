<?php get_header();?>

<main class="archive-content">
  <div class="container-archive">
    <h1 class="archive__title"><?php echo single_term_title(); ?></h1>

    <div class="archive__desc">
      <?php echo term_description();?>
    </div>

    <div class="archive__posts split-3">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article class="article-block column">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
              <h2><?php the_title(); ?></h2>
            </a>
          </article>
        <?php endwhile; ?>
      <?php else: ?>
        <h2>Sorry, there are no posts in this category.</h2>
      <?php endif; ?>
    </div>

  </div>
</main>

<?php get_footer(); ?>