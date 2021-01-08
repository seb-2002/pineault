<?php 

// Adding CSS and JS files

function pineault_setup() {
  wp_enqueue_style('bootstrap', get_theme_file_uri() . '/bootstrap.css', NULL, microtime());
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());


  wp_enqueue_style('aos.css', get_theme_file_uri() . '/node_modules/aos/dist/aos.css', NULL, microtime());

 
  wp_enqueue_script('jquery');
 

  wp_enqueue_script('boostrap.js', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js", NULL, microtime(), true);
  wp_enqueue_script('fontawesome.js', "https://kit.fontawesome.com/ec0d36d8d5.js", NULL, microtime(), true);

  wp_enqueue_script('aos.js', get_theme_file_uri () . '/node_modules/aos/dist/aos.js', NULL, microtime(), true);

  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);


}

add_action('wp_enqueue_scripts', 'pineault_setup');


// Adding Theme Support

function pineault_init() {
  add_theme_support('post-thumbnails');
  add_theme_support('title_tag');
  add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form')
);
}

add_action('after_setup_theme', 'pineault_init');

// Projects post type

function pineault_custom_post_type () {
  register_post_type('project', 
  array(
    'rewrite' => array('slug' => 'projects'),
    'labels' => array(
      'name' => 'Projects',
      'singular_name' => 'Project',
      'add_new_item' => 'Add New Project', 
      'edit_item' => 'Edit Project',
    ),
    'menu-icon' => 'dashicons-clipboard',
    'public' => true,
    'has_archive' => true,
    'supports' => array(
      'title', 'thumbnail', 'editor', 'excerpt', 'comments'
    )
  )
 );
}

add_action('init', 'pineault_custom_post_type');