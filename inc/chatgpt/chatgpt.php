<?php 

function add_new_post($title, $meta_long, $meta_short, $meta_facts, $meta_summary, $meta_name) {
  
  $my_post = array(
    'post_title'    => $title,
    'post_name' => $meta_name,
    'post_status'   => 'publish',
    'post_type' => 'post',
    'post_author'   => 1,
    'meta_input'   => array(
      'meta_post_long' => $meta_long,
      'meta_post_short' => $meta_short,
      'meta_post_facts' => $meta_facts,
      'meta_post_summary' => $meta_summary,
      'meta_post_name' => $meta_name,
    ),
  );
  if ( get_page_by_title( $my_post['name'] ) == null ) {
    wp_insert_post( $my_post );
  }
}

function chatgpt_function() {
  $title = stripslashes_deep($_POST['title']);
  $meta_long = stripslashes_deep($_POST['meta_post_long']);
  $meta_short = stripslashes_deep($_POST['meta_post_short']);
  $meta_facts = stripslashes_deep($_POST['meta_post_facts']);
  $meta_summary = stripslashes_deep($_POST['meta_post_summary']);
  $meta_name = stripslashes_deep($_POST['meta_post_name']);

  add_new_post($title, $meta_long, $meta_short, $meta_facts, $meta_summary, $meta_name);
  wp_die();
}

add_action('wp_ajax_chatgpt_click_action', 'chatgpt_function');
add_action('wp_ajax_nopriv_chatgpt_click_action', 'chatgpt_function');