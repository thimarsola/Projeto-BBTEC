<?php

function customThemeSupport() {
    add_theme_support(
        'html5',
        array(
            'script', // Fix for: The "type" attribute is unnecessary for JavaScript resources.
            'style',  // Fix for: The "type" attribute for the "style" element is not needed and should be omitted.
        )
    );
}
add_action( 'after_setup_theme', 'customThemeSupport' );


//DISABLE GUTENBERG
add_filter( 'use_block_editor_for_post_type', function( $enabled, $post_type ) {
    return 'your_post_type' === $post_type ? false : $enabled;
}, 10, 2 );
add_filter( 'use_block_editor_for_post', '__return_false' );

//remove head
remove_action('wp_head', 'wp_resource_hints', 2, 99);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'robots');
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

//fix close tag
if (!is_admin() && (!defined('DOING_AJAX') || (defined('DOING_AJAX') && !DOING_AJAX))) {
    ob_start('html5_slash_fixer');
    add_action('shutdown', 'html5_slash_fixer_flush');
}

function html5_slash_fixer($buffer)
{
    return str_replace(' />', '>', $buffer);
}

function html5_slash_fixer_flush()
{
   if (ob_get_contents()) {
      ob_end_clean();
   }
}
