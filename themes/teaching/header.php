<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    
    <!-- Custom CSS -->
    <link href="<?php bloginfo('template_directory') ?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory') ?>/css/responsive.css" rel="stylesheet">
    <!-- Eng Custom CSS -->
    <script src="<?php bloginfo('template_directory') ?>/js/swiper.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Header ------------------------->
    <header>
        <div class="w-1200 mgr-auto flex space-between flex-nowrap space-between">
            <figure>
                <img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="logo">
            </figure>
            <nav>
<!--
                <ul class="top-nav flex space-between flex-nowrap space-between align-center">
                    <li><a href="<?php bloginfo('url') ?>">Home</a></li>
                    <li><a href="">Training and development</a></li>
                    <li><a href="">Life with ILA</a></li>
                    <li><a href="">Career</a></li>
                </ul>
-->
                <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'topmenu', 
                        'container' => 'false', 
                        'menu_id' => 'header-menu', 
                        'menu_class' => 'top-nav flex space-between flex-nowrap space-between align-center'
                   ) 
                ); ?>
            </nav>
            <button class="btn btn-contact flex align-center"><img src="<?php bloginfo('template_directory') ?>/images/icon-phone-red.png" alt="contact us">Contact us</button>
        </div>
    </header>
    <!----------------------------------->