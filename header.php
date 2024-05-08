<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <?php 
    $current_title = wp_get_document_title();

    // FOR Main Page
    if ( is_home() ) {
      $home_title = carbon_get_theme_option('crb_seo_mainpage_title'); 
      $home_description = carbon_get_theme_option('crb_seo_mainpage_description'); 
      if ($home_title) {
        $current_title = $home_title;
      }
      if ($home_description) {
        $current_description = $home_description;
      }
    }

    if ( is_singular( 'post' ) ) {
      if (is_page_template('tpl_single.php')) {
        if (carbon_get_the_post_meta('crb_post_title')) {
          $current_title = carbon_get_the_post_meta('crb_post_title');
        }
        if (carbon_get_the_post_meta('crb_post_description')) {
          $current_description = carbon_get_the_post_meta('crb_post_description');
        }
      } else {
        $current_id = get_the_ID();
        $keyword = get_post_meta($current_id, "meta_post_name", true);
        $current_title = "How long do " . $keyword . " live ᐈ The " . $keyword . " life expectancy";
        $current_description = "What's the average lifespan of a " . $name . "?" . $name . " lifespan: how long do " . $name . " live? All the answers are here.";
      }
    }
  ?>
  <title><?php echo $current_title; ?></title>
  <?php if ($current_description): ?>
    <meta name="description" content="<?php echo $current_description; ?>" />
  <?php endif; ?>

  <?php if (get_the_post_thumbnail_url()): ?>
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
  <?php else: ?>
    <meta property="og:image" content="https://treba-solutions.com/wp-content/uploads/2023/05/treba.png">
  <?php endif; ?>
  <?php if (is_singular()): ?>
    <meta property="og:title" content="<?php echo $current_title; ?>" />
    <?php if ($current_description): ?>
      <meta property="og:description" content="<?php echo $current_description; ?>" />
    <?php else: ?>
      <?php 
        $content_text_for_description = wp_strip_all_tags( get_the_content() );
      ?>
      <meta property="og:description" content="<?php echo mb_strimwidth($content_text_for_description, 0, 150, '...'); ?>" />
    <?php endif; ?>
    <?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    <meta property="og:url" content="<?php echo $actual_link; ?>" />
    <meta property="og:article:published_time" content="<?php echo get_post_time('Y/n/j'); ?>" />
    <meta property="og:article:article:modified_time" content="<?php echo get_the_modified_time('Y/n/j'); ?>" />
  <?php endif; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  
	<?php wp_head(); ?>
	<?php echo carbon_get_theme_option('crb_google_analytics'); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header class="border-b border-gray-200 py-5 mb-6">
    <div class="container">
      <div class="flex items-center justify-between">
        <div class="mr-2">
           <a href="<?php echo get_home_url(); ?>" class="logo text-lg font-extrabold text-gray-700">HowLongLive</a>
        </div>
        <div class="main-menu hidden lg:flex items-center text-lg text-gray-700">
          <nav class="mb-4 lg:mb-0 lg:mr-8">
            <ul class="flex flex-col lg:flex-row lg:-mx-4">
              <li class="mb-2 lg:mb-0 lg:px-4"><a href="<?php echo get_home_url(); ?>">Home</a></li>
              <li class="mb-2 lg:mb-0 lg:px-4"><a href="/about-us">About us</a></li>
              <li class="mb-2 lg:mb-0 lg:px-4"><a href="<?php echo get_page_url('tpl_allposts'); ?>">All posts</a></li>
            </ul>
          </nav>
          <div class="mb-4 lg:mb-0 lg:mr-6">
            <?php echo get_search_form(); ?>
          </div>
          <div>
            <a href="/contact-us" class="block text-blue-500 border border-blue-500 rounded px-4 py-2">Contact Us</a>
          </div>
        </div>
        <div class="lg:hidden text-gray-600 cursor-pointer menu-js">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
          </svg>
        </div>
      </div>
    </div>
  </header>
  
  <div class="wrap">