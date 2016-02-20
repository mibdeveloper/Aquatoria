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

        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <section class="news">
                <h2><?php the_title(); ?></h2>
                <?php
                global $more;
                $more = 1;       // игнорируем тег more (не обрезаем).
                the_content();
                ?>
            </section>
        <?php endwhile; endif; ?>

    </main>

<?php get_footer() ?>