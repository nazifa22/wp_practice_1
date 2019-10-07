<?php

function alpha_bootstrapping() {
    load_child_theme_textdomain($domain = "alpha");
    add_theme_support($feature = "post-thumbnails");
    add_theme_support($feature = "title-tag");
}
add_action(
    $tag = "after_setup_theme", 
    $function_to_add = "alpha_bootstrapping"
);

function alpha_assets() {
    wp_enqueue_style(
        $handle = "bootstrap", 
        $src = "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    );
    wp_enqueue_style(
        $handle = "mainStylesheet", 
        $src = "get_stylesheet_uri()"
    );
}
add_action(
    $tag = "wp_enqueue_scripts", 
    $function_to_add = "alpha_assets"
);