<?php

function CodeWP_enqueue_stylesheets(){
    wp_enqueue_style('CodeWP-stylesheet',get_stylesheet_uri());
    wp_style_add_data('CodeWP-stylesheet','rtl','replace');
}
add_action('wp_enqueue_scripts','CodeWP_enqueue_stylesheets');

