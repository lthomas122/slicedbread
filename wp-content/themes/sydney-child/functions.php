<?php

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function register_my_menu() {
  register_nav_menu('socials-menu',__( 'Socials Menu' ));
}
add_action( 'init', 'register_my_menu' );

function my_scripts_method() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/child-scripts.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

if(get_page_by_title("Home") == null)
{
    $post = array(
        "post_title" => "Home",
        "post_status" => "publish",
        "post_type" => "page",
        "menu_order" => "-100",
        "page_template" => "single-page-theme.php"
    );

    wp_insert_post($post);

    $home_page = get_page_by_title("Home");
    update_option("page_on_front",$home_page->ID);
    update_option("show_on_front","page");
}

// Portfolio Page
require_once('portfolio-type.php');

add_filter('excerpt_length', 'my_excerpt_length');

function my_excerpt_length($length) {

    return 25;

}

add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_more($text){

    return ' ';

}

function portfolio_thumbnail_url($pid){
    $image_id = get_post_thumbnail_id($pid);
    $image_url = wp_get_attachment_image_src($image_id,'screen-shot');
    return  $image_url[0];
}


/*
function new_nav_menu_items($items)
{
    $items = "";

    $args = array("post_type" => "page", "order" => "ASC", "orderby" => "menu_order");
    $the_query = new WP_Query($args);

    if($the_query->have_posts()):
        while($the_query->have_posts()):
            $the_query->the_post();
                $items .= '<li><a href="#post-'. get_the_ID() .'">' . get_the_title() . '</a></li>';
        endwhile;
    else:
        echo "";
    endif;
    return $items;
}
add_filter("wp_nav_menu_items", "new_nav_menu_items");*/
