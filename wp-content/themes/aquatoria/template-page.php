<?php
/*
Template name: Шаблон брони
*/
?>

<?php get_header() ?>
<main id="main" class="container">
    <?php get_sidebar() ?>
    <section class="descriptions">

            <?php if(have_posts()):while(have_posts()):the_post(); ?>

                <?php the_content() ?>

            <?php endwhile; ?>

            <?php else: ?>

            <?php endif; ?>


        </section>

  </main>


    <?php get_footer() ?>