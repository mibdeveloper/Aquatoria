<?php get_header() ?>

    <main id="main" class="container">



        <?php get_sidebar() ?>

        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </main>

<?php get_footer() ?>