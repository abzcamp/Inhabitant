<?php

//Filter stylesheet to point to minified css

// function inhabitant_min_css() {
// if ( file_exists( get_template_directory() . '/build/css/style.min.css')){
//     $stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';

//     }

// return $stylesheet_uri ;

// }

// add_filter('stylesheet_uri', 'inhabitant_min_css');

//Adds Script and Stylesheets
//Adds Fonts from Google Fonts
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css");

}

add_action('wp_enqueue_scripts', 'inhabitant_files');


//Adds Theme support -ex: title tag
function inhabitant_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'inhabitant_features');


?>