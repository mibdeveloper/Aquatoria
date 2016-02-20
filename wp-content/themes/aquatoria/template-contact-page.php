<?php
/*
Template name: Страница контактов
*/
?>

<?php get_header() ?>

    <main id="main" class="container">

        <?php get_sidebar() ?>
        <section class="our_contacts">
            <h2>Контактная информация Пансионата "Акватория"</h2>
        <?php

        $args = array('category' => '7', 'order'=>'ASC' );
        $lastposts = get_posts( $args );
        foreach( $lastposts as $post ){ setup_postdata($post);
            ?>
            <div>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <?php the_content(); ?>
            </div>

            <?php
        }
        wp_reset_postdata();

        ?>
        </section>


    </main>

    <div class="bgfooter">
        <div class="bgfooter_front">

        </div>
        <footer class="container grid">
            <div class="block block1">
                <div class="center_block">

                    <button type="button" id="reservationBtn" name="reservationBtn">
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
        </footer>
    </div>
<?php wp_footer() ?>