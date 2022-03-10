<?php

//REGISTER MENU
function register_my_menus()
{
    register_nav_menus([
        //Home
        'header-home' => __('Home Menu'),
        'footer-home' => __('Home Footer Menu')
    ]);
}

add_action('init', 'register_my_menus');
