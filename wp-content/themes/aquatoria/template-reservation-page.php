<?php
/*
Template name: Страница резервации
*/
?>

<?php get_header() ?>

    <main id="main" class="container">

        <?php get_sidebar() ?>

        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>

    </main>

<div class="bgfooter">
    <div class="bgfooter_front">

    </div>
    <footer class="container grid">
        <div class="block block1">
            <div class="center_block" style="visibility: hidden;">

                <button type="button" id="reservationBtn" name="reservationBtn" disabled="true">
                    забронировать
                </button>


            </div>
        </div>
        <div class="block block2">
            <div class="have_block">
                <h2>У нас имеется</h2>
                <ul>
                    <li>
                        <p>
                            FREE Wi-Fi
                        </p>

                    <li>
                        <p>
                            Открытый бассейн на территории
                        </p>

                    <li>
                        <p>
                            Кафе
                        </p>

                    <li>
                        <p>
                            Камера хранения
                        </p>

                </ul>
            </div>
        </div>
        <div class="block block3">
            <div class="contact_block">
                <h2>Контакты</h2>
                <ul>
                    <?php

                    $args = array('category' => '7', 'order'=>'ASC' );
                    $lastposts = get_posts( $args );
                    foreach( $lastposts as $post ){ setup_postdata($post);
                        ?>

                        <li>
                            <?php the_content(); ?>
                        </li>

                        <?php
                    }
                    wp_reset_postdata();

                    ?>

                </ul>

            </div>
        </div>
    </footer>
</div>
<?php wp_footer() ?>
</body>
</html>