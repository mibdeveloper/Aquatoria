<?php
/*
Template name: Страница новостей
*/
?>

<?php get_header() ?>

<main id="main" class="container">

    <aside>
        <div class="calendar">
            <div id="wrap">
                <div id="digiclock">

                </div>
            </div>
        </div>
    </aside>

    <section class="news">
        <h2 id="newsPage">Новости "Акватории" и города Евпатории</h2>
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array( 'posts_per_page' => 5, 'cat' => '6', 'paged' => $paged);
        $custom_query = new WP_Query( $args );
        while($custom_query->have_posts()) : $custom_query->the_post(); ?>
            <article class="news_h">
                <h3><?php the_title(); ?></h3>
                <?php
                global $more;
                $more = 1;       // игнорируем тег more (не обрезаем).
                the_content();
                ?>
                <hr />
            </article>
        <?php endwhile; ?>

        <?php if (function_exists("pagination")) {
            pagination($custom_query->max_num_pages);
        } ?>


        <?php wp_reset_postdata(); ?>

    </section>


</main>

<?php get_footer() ?>
