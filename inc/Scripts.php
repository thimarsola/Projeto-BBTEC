<?php

//REGISTER JS
function loadJS()
{
    if(is_home()){
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-home.min.js', [], null, true);
    }elseif (is_page() || is_single() || is_archive()){
        wp_enqueue_script('pages', get_template_directory_uri() . '/assets/js/script-pages.min.js', [], null, true);
    }elseif (is_404()){
        wp_enqueue_script('error', get_template_directory_uri() . '/assets/js/script-error.min.js', [], null, true);
    }
}

add_action('wp_enqueue_scripts', 'loadJS');