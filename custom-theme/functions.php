<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function load_stylesheets(){

    wp_register_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css',array(), false,'all');
    wp_enqueue_style('bootstrap-css');

    wp_register_style('style-css', get_template_directory_uri().'/style.css',array(), false,'all');
    wp_enqueue_style('style-css');

}
add_action('wp_enqueue_scripts','load_stylesheets');

function include_jquery(){

    wp_register_script('trojan-jquery', get_template_directory_uri().'/js/jquery-351.min.js', array(),'3.5.1',true);
    wp_enqueue_script('trojan-jquery');
}
add_action('wp_enqueue_scripts','include_jquery');


function loadjs(){

    wp_register_script('customjs',get_template_directory_uri().'/js/scripts.js','',1,true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','loadjs');


function myWidgets(){
    register_sidebar( array (
        'name' => 'Sidebar',
        'id' => 'sidebar1',
    ));
}
add_action('widgets_init', 'myWidgets');


add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
    'footer-menu' => __( 'Footer Menu', 'THEMENAME' ),
) );


add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);


?>


