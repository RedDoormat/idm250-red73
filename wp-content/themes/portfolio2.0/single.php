<?php get_header();?>
<main class="main-content">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container-single">
        <!-- Main Content -->
        <div class="information-dump">
          <h1 class="post_title js-blog-heading"><?php the_title(); ?></h1>

          <?php the_category(); ?>

          <div class="page-builder">
            <?php the_content(); ?>
          </div>
            
        </div>

    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>