<?php

//dynamic title tag
function danielabustos_theme_support(){
    add_theme_support('title_tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','danielabustos_theme_support');

//menu options
function danielabustos_menus(){
    //location del menu
    $locations = array(
        'primary' => "Desktop Left Sidebar",
        'footer' => "Footer Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'danielabustos_menus');

//dynamic styles
function danielabustos_register_styles() {
    $version = wp_get_theme() ->get('Version');
    wp_enqueue_style('danielabustos-style', get_template_directory_uri() . "/style.css", array('danielabustos-bootstrap'), '$version', 'all');
    wp_enqueue_style('danielabustos-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('danielabustos-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}
add_action('wp_enqueue_scripts', 'danielabustos_register_styles');

//dynamic scripts
function danielabustos_register_scripts() {
    wp_enqueue_script('danielabustos-jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('danielabustos-popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('danielabustos-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('danielabustos-main',get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'danielabustos_register_scripts');

//CREAR WIDGETS
function danielabustos_widget_areas() {

    register_sidebar(
        array(
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
        )
    );

    register_sidebar(
        array(
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
            'name' => 'Footer',
            'id' => 'footer-1',
        )
    );
}
add_action('widgets_init', 'danielabustos_widget_areas');
