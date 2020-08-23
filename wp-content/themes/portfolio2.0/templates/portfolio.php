<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
    <section id="home_content">
        <div class="container">
            <h2>All Projects</h2>
                <?php
                $all_projects = get_field('all_projects');
                if ($all_projects): ?>
                    <?php foreach ($all_projects as $all_projects):
                        $permalink = get_permalink($all_projects->ID);
                        $title = get_the_title($all_projects->ID);
                        $excerpt = get_the_excerpt($all_projects->ID);
                        $image = get_the_post_thumbnail($all_projects->ID);
                        ?>
                        <div class="media-block">
                            <div class="media-block__figure">
                            <?php echo $image; ?>
                            </div>
                            <div class="media-block__content">
                                <h3 class="media-block__heading"><?php echo $title ; ?></h3>
                                <p class="media-block__body"><?php echo  $excerpt; ?></p>
                                <a class="btn media-block__cta" href="<?php echo $permalink;?>">Learn More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>