<?php $current_id = get_the_ID(); ?>

<div>
  <div class="relative">
    <a href="<?php the_permalink(); ?>" class="w-full h-full absolute top-0 left-0"></a>
    <?php $medium_thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
      <?php if ($medium_thumb): ?>
        <img class="w-full h-[140px] min-h-[140px] object-cover rounded mb-2" alt="<?php the_title(); ?>" src="<?php echo $medium_thumb; ?>" loading="lazy">
      <?php endif; ?>
    <div class="text-xl font-medium mb-2"><?php the_title(); ?></div>
    <div class="content text-gray-600 font-light leading-6 mb-2"><?php $meta_post_short = get_post_meta($current_id, 'meta_post_short', true); echo mb_strimwidth($meta_post_short, 0, 75, '...'); ?></div>
  </div>
  <div class="flex items-center">
    <div class="text-gray-600 font-light"><?php echo get_the_modified_time('Y-m-j'); ?>・</div>
    <div>
      <?php
      $post_categories = get_the_terms( $posts->ID, 'category' );
      foreach (array_slice($post_categories, 0, 1) as $post_category){ ?>
        <a href="<?php echo get_term_link($post_category->term_id, 'category') ?>" class="text-blue-500"><?php echo $post_category->name; ?></a> 
      <?php } ?>
    </div>
  </div>
</div>