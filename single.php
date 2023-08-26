<?php 
get_header(); 
$currentId = get_the_ID();
$countNumber = tutCount($currentId); 
$Parsedown = new Parsedown();
$current_categories = get_the_terms( $new_posts->ID, 'category' );
foreach (array_slice($current_categories, 0, 1) as $current_category) {
  $current_category_name = $current_category->name;
  $current_category_id = $current_category->term_id;
}
?>

<div class="container mb-10">
  <div class="flex flex-col-reverse lg:flex-row flex-wrap lg:-mx-4 mb-10">
    <div class="sticky top-4 w-full lg:w-1/4 lg:px-4">
      <div class="hidden lg:block">
        <div class="single-subjects bg-gray-50 border rounded-lg p-4 mb-5">
          <div class="text-2xl font-bold uppercase mb-3">
            <?php _e('Content','treba-wp'); ?>:
          </div>
          <div class="single-subjects-inner"></div>
        </div>
      </div>
      <div class="bg-green-50 border rounded-lg p-4">
        <div class="text-lg font-semibold mb-4"><?php _e("Don’t forget to share this post", "treba-wp"); ?></div>
        <div><?php do_action('show_social_share_buttons'); ?></div>
      </div>
    </div>
    <div class="w-full lg:w-3/4 lg:px-4 mb-6">
      <div class="breadcrumbs text-sm text-gray-800 mb-5" itemprop="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <ul class="flex items-center flex-wrap -mr-4">
          <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem' class="breadcrumbs_item px-4 pl-8">
            <a itemprop="item" href="<?php echo home_url(); ?>" class="text-gray-500 hover:underline">
              <span itemprop="name"><?php _e( 'Home', 'treba-wp' ); ?></span>
            </a>                        
            <meta itemprop="position" content="1">
          </li>
          <?php if ($current_categories): ?>
          <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem' class="breadcrumbs_item px-4">
            <a itemprop="item" href="<?php echo get_term_link($current_category_id, 'category'); ?>" class="text-gray-500">
              <span itemprop="name"><?php echo $current_category_name; ?></span>
            </a>                        
            <meta itemprop="position" content="2">
          </li>
          <?php endif; ?>
          <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="breadcrumbs_item text-gray-500 hover:underline px-4">
            <span itemprop="name"><?php the_title(); ?></span>
            <meta itemprop="position" content="<?php echo ($current_categories) ? '3' : '2'; ?>" />
          </li>
        </ul>
      </div>
      <div class="mb-6"><h1 class="text-4xl font-bold"><?php the_title(); ?></h1></div>
      <div class="flex flex-wrap text-gray-600 mb-6">
        <div class="">Updated: <?php echo get_the_modified_time('Y-m-j'); ?> ・ </div>
        <div class="">Views: <?php echo $countNumber; ?> ・ </div>
        <div class="post-time-read"><span></span> min read</div>
      </div>
      <?php 
        $medium_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
        $large_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
      ?>
      <?php if ($medium_thumb): ?>
        <div class="mb-6">
          <img class="w-full object-cover rounded-lg border p-4" alt="<?php the_title(); ?>" src="<?php echo $medium_thumb; ?>" srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w" loading="lazy" data-src="<?php echo $medium_thumb; ?>" data-srcset="<?php echo $medium_thumb; ?> 1024w, <?php echo $large_thumb; ?> 1536w">
        </div>
        
      <?php endif; ?>
      
      <div class="content">
        <div class="bg-blue-50 rounded-lg border px-6 py-4 mb-6">
          <h2 class="text-2xl font-bold mb-2">Short answer</h2>
          <div><p><?php echo get_post_meta($currentId, "meta_post_short", true); ?></p></div>
        </div>
        <div class="mb-6">
          <h2 class="text-2xl font-bold">More details</h2>
          <div><p><?php $meta_long = get_post_meta($currentId, "meta_post_long", true); echo $Parsedown->text($meta_long); ?></p></div>
        </div>
        <div class="bg-gray-50 border rounded-lg p-4 pb-0 mb-6">
          <h2 class="text-2xl font-bold">Some interesting facts about <?php echo get_post_meta($currentId, "meta_post_name", true); ?></h2>
          <div><p><?php $meta_facts = get_post_meta($currentId, "meta_post_facts", true); echo $Parsedown->text($meta_facts); ?></p></div>
        </div>
        <div class="border-b border-gray-200 pb-6 mb-6">
          <h2 class="text-2xl font-bold">Summary</h2>
          <div><p><?php $meta_summary = get_post_meta($currentId, "meta_post_summary", true); echo $Parsedown->text($meta_summary); ?></p></div>
        </div>
      </div>
      <div>
        <div class="text-2xl font-bold mb-2">Comments</div>
        <div class="content">
          <?php comments_template(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="text-2xl font-bold text-center mb-4"><?php _e("You might also like", "treba-wp"); ?></div>
  <div class="flex flex-wrap -mx-4">
    <?php 
      $other_posts = new WP_Query( array( 
        'post_type' => 'post', 
        'posts_per_page' => 4,
        'order' => 'DESC',
        'post__not_in' => array($currentId),
      ) );
      if ($other_posts->have_posts()) : while ($other_posts->have_posts()) : $other_posts->the_post(); 
    ?>
      <div class="w-1/2 lg:w-1/4 px-4 mb-8">
        <?php get_template_part("template-parts/post-item"); ?>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<?php get_footer(); ?>