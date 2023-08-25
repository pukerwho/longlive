<?php 

function links_activated() {
  global $wpdb;

  $charset_collate = $wpdb->get_charset_collate();

  if($wpdb->get_var("SHOW TABLES LIKE 'footer_seo_links'") != 'footer_seo_links') {
    $sql = "CREATE TABLE `footer_seo_links` (
        `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `post_URL` varchar(255) NOT NULL,
        `top_links` varchar(255) NOT NULL,
        `q_links` varchar(255) NOT NULL,
        `date_create` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
        PRIMARY KEY (`ID`),
        KEY `post_URL` (`post_URL`),
        KEY `top_links` (`top_links`)
      ) $charset_collate;";

    $wpdb->query( $sql );

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    return true;
  }
}

links_activated();


function get_post_keywords() {
  $posts_links_array = array();
  $posts_url_array = array();
  $count_post_in_array = get_option( '_crb_footer_links_numbers' );;

  $footer_post_args = array('numberposts' => -1);
  $footer_posts = get_posts($footer_post_args);
  shuffle($footer_posts);
  foreach ($footer_posts as $post) {
    if (count($posts_links_array) < $count_post_in_array) {
      $post_id = $post->ID;
      $post_keywords = get_post_meta($post_id, '_crb_post_keywords', true);
      if ($post_keywords) {
        $post_url = get_the_permalink($post->ID);
        $post_keywords_array = explode(",", $post_keywords);
        shuffle($post_keywords_array);
        foreach ($post_keywords_array as $keyword) {
          $keyword = trim($keyword);
          $ahref = '<a href="'.$post_url.'">'.$keyword.'</a>';
          if (!in_array($post_url, $posts_url_array)) {
            array_push($posts_links_array, $ahref); 
            array_push($posts_url_array, $post_url);
          } 
        }
      }
    } else {
      return $posts_links_array;
    }
  }
  return $posts_links_array;
}

function prepare_links() {  
  $get_posts_links = get_post_keywords();
  $all_links = array_merge($get_posts_links); 
  return $all_links;
}

function check_links($post_URL) {
  global $wpdb;
  $check_footer_links = $wpdb->get_results(
    "
      SELECT ID
      FROM footer_seo_links
      WHERE post_URL = '$post_URL'
    "
  );
  return $check_footer_links;
}

function save_links($id) {
  global $wpdb;
  $links = prepare_links();
  foreach($links as $link) {
    $wpdb->query( $wpdb->prepare( 
      "
        INSERT INTO footer_seo_links
        ( post_URL, top_links )
        VALUES ( %s, %s)
      ",
      array(
        $id, 
        $link, 
      )
    ) );
  }
}

function get_footer_links($id) {
  global $wpdb;
  
  $current_top_links = $wpdb->get_results("SELECT top_links FROM footer_seo_links WHERE post_URL = '$id'");
  return $current_top_links;
}

function footer_links($id) {
  $has_links = check_links($id);
	if ( empty( $has_links ) ) {
    save_links($id);
  } 
  $get_links = get_footer_links($id);
  return $get_links;
}

?>