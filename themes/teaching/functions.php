<?php 
    function theme_teaching(){
        register_nav_menu('topmenu',__('Prime menu'));
        add_theme_support('post_thumbnails');
    }
    add_action('init','theme_teaching');
?>