<?php

function load_stylesheets()
{
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js', null,true); 
    wp_enqueue_script('jquery');

    wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.rtl.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    

    wp_register_style('bootstrapcss', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css', array(), false,'all');
    wp_enqueue_style('bootstrapcss');

    wp_register_script('bootstrapjs','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js', null, true);
    wp_enqueue_script('bootstrapjs');

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');

}
add_action('wp_enqueue_scripts','load_stylesheets');

add_filter('use_block_editor_for_post_type', '__return_false', 100);

add_theme_support('post-thumbnails');
add_image_size('small',100,100, true);

add_theme_support('menus');
register_nav_menus(
array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )
);

register_sidebar (
array(
    'name' => 'Page Sidebar',
    'id' => 'page-sidebar',
    'class' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
)
);

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function portfolyo_posttype() {
    $args = array(
        'labels' => array(
            'name' => 'Portfolyo',
            'singular_name' => 'Portfolyo',
        ),
        'hierarchical' => true,
        'public' => true, 
        'has_archive' => true,
        'menu_icon' => 'dashicons-edit',
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'), 
        'rewrite' => array('slug' => 'portfolyo'),

    );
    register_post_type('portfolyo',$args);
}
add_action('init', 'portfolyo_posttype');

function portfolyo_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => 'Kategoriler',
            'singular_name' => 'Kategori',
        ),
        'public' => true,
        'hierarchical' => true,
    );
   register_taxonomy('portfolyo',array('portfolyo'),$args);
}
add_action('init', 'portfolyo_taxonomy');

