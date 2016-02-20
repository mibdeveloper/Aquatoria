<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); wp_title() ?></title>
    <script>
        path = "<?php echo get_template_directory_uri(); ?>";

    </script>
    <?php wp_head() ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<div class="shadowForm" id="shadowForm">
    <?php echo do_shortcode('[contact-form-7 id="354" title="Без названия"]'); ?>
</div>

<div id="button_toUp">
    <img id="button_toUpMap" class="img-responsive" src="<?php bloginfo('template_url') ?>/img/btnToUp.png" alt="" usemap="#myButton_toUpMap" hidefocus=true />
    <map name="myButton_toUpMap">
        <area id="button_toUpArea" href="#" shape="poly" coords="36,0,71,25,71,71,0,71,0,26,36,0" alt="myBtn" />
    </map>
</div>

<header class="container">
    <nav id="nav">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <div class="left_logo">
                    <img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="Alternate Text" />
                </div>
            </a>
            <div class="our_contact">

                <?php
                $post = get_post(409);

                $number = $post->post_content;

                $teg_p = array('<p>', '</p>');
                $new_number = str_replace($teg_p, "", $number);

                $pieces = explode(')', $new_number);
                ?>

                <h1>
                    <?php echo $pieces[0].')'.'<span>'.$pieces[1].'</span>' ?>
                </h1>

                <?php wp_reset_postdata(); ?>

                <?php

                $post = get_post( 402 );

                echo $post->post_content;

                wp_reset_postdata();

                ?>

            </div>
        </div>
        <input type="checkbox" id="hmt" class="hidden-menu-ticker">
        <label class="btn-menu" for="hmt">
            <span class="first"></span>
            <span class="second"></span>
            <span class="third"></span>
        </label>
        <? wp_nav_menu(['container' => 'false']); ?>
    </nav>
    <div class="slider">
        <?php echo do_shortcode("[huge_it_slider id='1']"); ?>
    </div>

</header>