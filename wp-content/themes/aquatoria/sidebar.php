<aside>
    <div class="calendar">
        <div id="wrap">
            <div id="digiclock">

            </div>
        </div>
    </div>
    <h2>Наши новости</h2>

    <?php

    $args = array( 'posts_per_page' => 3, 'category' => '6' );
    $lastposts = get_posts( $args );
    foreach( $lastposts as $post ){ setup_postdata($post);
    ?>

    <article class="our_news">
        <h4><?php the_title(); ?></h4>
        <?php the_content('Подробнее'); ?>
    </article>

    <?php
    }
    wp_reset_postdata();

    ?>

</aside>