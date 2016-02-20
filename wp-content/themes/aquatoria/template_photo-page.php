<?php
/*
Template name: Фото Шаблон
*/
?>
<?php get_header(); ?>
<section id="main" class="container">
     <?php the_post(); ?>
                <?php the_content(); ?>
</section>
<?php get_footer(); ?>