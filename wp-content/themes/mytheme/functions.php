<?php


// to load css
function load_css()
{
    /*
        1st arg: name css 
        2nd arg: location with get_template_directory_uri() give the root theme directory
        3rd arg: dependencies "[]",
        4th arg: version
        last: media(responsive)
    */
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], false, 'all');
    wp_enqueue_style('bootstrap'); // tell to enqueue bootstrap

    wp_register_style('custom', get_template_directory_uri() . '/css/main.css', [], false, 'all');
    wp_enqueue_style('custom'); // for main.css

}


add_action('wp_enqueue_scripts', 'load_css');

// load js
function load_js()
{
    // for jquery
    wp_enqueue_script('jquery');
    /*
        1st arg: name js
        2nd arg: location with get_template_directory_uri() give the root theme directory
        3rd arg: dependencies "[]",
        4th arg: version
        last: in footer ( display in footer ) false => header
    */
    wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts', 'load_js');


// Theme Options
add_theme_support('menus');
// to allows to add images to our blogposts
add_theme_support('post-thumbnails');
// to activate the widgets
add_theme_support('widgets');

function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');

// Menus
register_nav_menus(

    array(
        // id           visual
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )
);

// Custom image sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);
