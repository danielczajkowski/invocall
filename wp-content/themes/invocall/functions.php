<?php

function wpse_setup_theme() {
   add_theme_support( 'post-thumbnails' );
   add_image_size( 'case-study-slider-thumb', 327, 215, true );
}

add_action( 'after_setup_theme', 'wpse_setup_theme' );

function add_styles()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'add_styles');

function add_javascript()
{
    wp_enqueue_script('global', get_template_directory_uri() . '/assets/js/global.js', array('jquery'), 1.1, true);
}
add_action('wp_enqueue_scripts', 'add_javascript');

function register_menus()
{
    register_nav_menus(
        array(
            'main-menu' => 'Header Menu',
            'privacy-menu' => 'Privacy Menu',
            'footer-nav' => 'Footer Nav',
            'footer-nav-offer' => 'Footer Nav Second',
            'footer-nav-third' => 'Footer Nav Third',
        )
    );
}
add_action('init', 'register_menus');

if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'parent_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

function create_offers()
{
    $args = array(
        'public' => true,
        'label' => 'Offers',
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'thumbnail' => true,
        'supports' => array('title', 'thumbnail', 'excerpt', 'revisions', 'custom-fields'),
        'rewrite' => array('slug' => 'oferta'),
    );
    register_post_type('offers', $args);
}
add_action('init', 'create_offers');

function create_offers_tags()
{
    register_taxonomy(
        'offers-tag',
        array('offers'),
        array(
            'hierarchical' => true,
            'label' => 'Tags',
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'offers-tag'),
        )
    );
}
add_action('init', 'create_offers_tags', 0);

function create_knowledge_base()
{
    $args = array(
        'public' => true,
        'label' => 'Knowledge Base',
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'thumbnail' => true,
        'rewrite' => array('slug' => 'baza-wiedzy'),
        'supports' => array('title', 'thumbnail', 'revisions', 'custom-fields')
    );
    register_post_type('knowledge-base', $args);
}
add_action('init', 'create_knowledge_base');

function create_knowledge_base_category()
{
    register_taxonomy(
        'knowledge-base-category',
        array('knowledge-base'),
        array(
            'hierarchical' => true,
            'label' => 'Category',
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'knowledge-base-category'),
        )
    );
}
add_action('init', 'create_knowledge_base_category', 0);

function create_knowledge_base_tag()
{
    register_taxonomy(
        'knowledge-base-tag',
        array('knowledge-base'),
        array(
            'hierarchical' => true,
            'label' => 'Tag',
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'knowledge-base-tag'),
        )
    );
}
add_action('init', 'create_knowledge_base_tag', 0);

function create_job_offers()
{
    $args = array(
        'public' => true,
        'label' => 'Oferty Pracy',
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'thumbnail' => true,
        'supports' => array('title', 'thumbnail', 'revisions', 'custom-fields'),
        'rewrite' => array('slug' => 'oferty-pracy'),
    );
    register_post_type('oferty_pracy', $args);
}
add_action('init', 'create_job_offers');

add_filter('wpcf7_autop_or_not', '__return_false');

// function add_cpt_to_pll($post_types, $hide) {
//     if ($hide)
//         // hides 'my_cpt' from the list of custom post types in Polylang settings
//         unset($post_types['my_cpt']);
//     else
//         // enables language and translation management for 'my_cpt'
//         $post_types['my_cpt'] = 'my_cpt';
//     return $post_types;
// }
// add_filter('pll_get_post_types', 'add_cpt_to_pll', 10, 2);
