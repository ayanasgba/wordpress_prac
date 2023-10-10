<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('widgets_init', 'register_my_widgets');

add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu(){
    register_nav_menu('top', 'меню в top');
}


function style_theme(){
   // wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri(). '/assets/css/coolblue.css');
}

function scripts_theme(){
    wp_enqueue_script('init', get_template_directory_uri().'/assets/js/scrollToTop.js');
    //wp_enqueue_script('dbtapdo', get_template_directory_uri().'/assets/http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
    }

function register_my_widgets(){

    register_sidebar( array(
        'name' => 'Left Sidebar',
        'id' => "left_sidebar",
        'description' => 'Description sidebar',
        // 'class' => '',
        // 'before_widget' => '<li id="%1$s" class="widget %2$s">',
        // 'after_widget' => "</li>\n",
        // 'before_title' => '<h2 class="widgettitle">',
        // 'after_title' => "</h2>\n",
        // 'before_sidebar' => '', // WP 5.6
        // 'after_sidebar' => '', // WP 5.6
    ) );
    }
?>


