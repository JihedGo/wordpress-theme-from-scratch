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

}


add_action('wp_enqueue_scripts', 'load_css');


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
