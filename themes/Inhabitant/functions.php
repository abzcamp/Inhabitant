<?php

//Adds Script and Stylesheets
//Adds Fonts from Google Fonts
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
}

add_action('wp_enqueue_scripts', 'inhabitant_files');


//Adds Theme support -ex: title tag
function inhabitant_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'inhabitant_features');


?>