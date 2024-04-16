<?php

function create_post_type() {
  register_post_type( 'healthcare',
    array(
      'labels' => array(
          'name' => __( 'Health care' ),
          'singular_name' => __( 'Health care' )
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'show_in_rest' => false,
      'taxonomies' => array( 'category' ),
      'menu_icon' => 'dashicons-feedback',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'page-attributes' ),
    )
  );

  register_post_type( 'p',
    array(
      'labels' => array(
          'name' => __( 'Single posts' ),
          'singular_name' => __( 'Single post' )
      ),
      'public' => true,
      'has_archive' => true,
      'hierarchical' => true,
      'show_in_rest' => true,
      'taxonomies' => array( 'category' ),
      'menu_icon' => 'dashicons-feedback',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'revisions', 'page-attributes' ),
    )
  );
  
}
add_action( 'init', 'create_post_type' );