<?php get_header(); ?>
  <div class="container">
    <div class="flex flex-wrap lg:-mx-2 mb-6">
      <?php $top_posts = get_posts(array( 
        'post_type' => 'p'
      ));?>
      <?php $top_posts[0]->ID; ?>
      <!-- Left - First -->
      <div class="w-full lg:w-3/5 lg:px-2 mb-4">
        <div class="relative h-[225px] lg:h-[450px]">
          <img src="http://longlive.local/wp-content/uploads/2023/08/casino-1.jpg" alt="" class="w-full h-[225px] lg:h-[450px] object-cover rounded-lg">
          <div class="w-full h-full absolute top-0 left-0 bg-gradient-to-b from-transparent to-black/75 rounded-lg z-1"></div>
          <div class="w-full absolute left-0 bottom-0 z-1">
            <div class="text-lg lg:text-2xl text-white px-4 lg:px-8 py-4 lg:py-6"><?php echo get_the_title($top_posts[0]->ID); ?></div>
          </div>
          <a href="<?php echo get_the_permalink($top_posts[0]->ID); ?>" class="w-full h-full absolute top-0 left-0 z-1"></a>
        </div>
      </div>
      <!-- Right -->
      <div class="w-full lg:w-2/5 lg:px-2">
        <div class="h-auto lg:h-[450px]">
          <!-- Right - second -->
          <div class="relative mb-4">
            <img src="http://longlive.local/wp-content/uploads/2023/08/casino-1.jpg" alt="" class="w-full h-[225px] lg:h-[216px] object-cover rounded-lg">
            <div class="w-full h-full absolute top-0 left-0 bg-gradient-to-b from-transparent to-black/75 rounded-lg z-1"></div>
            <div class="w-full absolute left-0 bottom-0 z-1">
              <div class="text-lg lg:text-2xl text-white px-4 lg:px-8 py-4 lg:py-6"><?php echo get_the_title($top_posts[1]->ID); ?></div>
            </div>
            <a href="<?php echo get_the_permalink($top_posts[1]->ID); ?>" class="w-full h-full absolute top-0 left-0 z-1"></a>
          </div>
          <!-- Right - third -->
          <div class="relative">
            <img src="http://longlive.local/wp-content/uploads/2023/08/casino-1.jpg" alt="" class="w-full h-[225px] lg:h-[216px] object-cover rounded-lg">
            <div class="w-full h-full absolute top-0 left-0 bg-gradient-to-b from-transparent to-black/75 rounded-lg z-1"></div>
            <div class="w-full absolute left-0 bottom-0 z-1">
              <div class="text-lg lg:text-2xl text-white px-4 lg:px-8 py-4 lg:py-6"><?php echo get_the_title($top_posts[2]->ID); ?></div>
            </div>
            <a href="<?php echo get_the_permalink($top_posts[2]->ID); ?>" class="w-full h-full absolute top-0 left-0 z-1"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap items-center lg:-mx-4 mb-6">
      <div class="w-full lg:w-3/4 lg:px-4 mb-6 lg:mb-0">
        <h2 class="text-2xl lg:text-3xl font-semibold decoration-blue-500 decoration-wavy underline mb-6"><?php _e("Life expectancy", "treba-wp"); ?></h2>
        <div class="flex items-center -mx-2 lg:-mx-4">
          <div class="px-2 lg:px-4">
            <a href="<?php echo get_page_url('tpl_allposts'); ?>" class="text-blue-500 bg-blue-50 rounded px-3 py-2">All</a>
          </div>
          <?php $all_cats = get_terms( array( 
            'taxonomy' => 'category', 
            'parent' => 0, 
            'hide_empty' => false,
            'exclude'  => 1,
          ));
          foreach ( array_slice($all_cats, 0, 9) as $all_cat ): ?>
            <div class="px-2 lg:px-4">
              <a href="<?php echo get_term_link($all_cat); ?>" class="text-base lg:text-lg text-gray-700"><?php echo $all_cat->name ?></a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="w-full lg:w-1/4 lg:px-4">
        <?php echo get_search_form(); ?>
      </div>
    </div>
  
    <div class="flex flex-wrap lg:-mx-4 mb-10">
      <div class="w-full lg:w-3/4 lg:px-4 mb-6 lg:mb-0">
        <div class="flex flex-wrap lg:-mx-4 mb-6">
          <?php 
            $posts = new WP_Query( array( 
              'post_type' => 'post', 
              'posts_per_page' => 20,
              'order' => 'DESC',
            ) );
            if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); 
          ?>
            <div class="w-full lg:w-1/3 lg:px-4 mb-8">
              <?php get_template_part("template-parts/post-item"); ?>
            </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="flex justify-center mb-12">
          <a href="<?php echo get_page_url('tpl_allposts'); ?>" class="text-blue-500 border border-blue-500 rounded px-4 py-2">All posts</a>
        </div>
        <div class="hidden">
          <h2 class="text-2xl lg:text-3xl font-semibold decoration-blue-500 decoration-wavy underline mb-6"><?php _e("Health and Care", "treba-wp"); ?></h2>
          <div class="flex flex-wrap lg:-mx-4 mb-6">
            <?php 
              $health_posts = new WP_Query( array( 
                'post_type' => 'post', 
                'posts_per_page' => 20,
                'order' => 'DESC',
              ) );
              if ($health_posts->have_posts()) : while ($health_posts->have_posts()) : $health_posts->the_post(); 
            ?>
              <div class="w-full lg:w-1/3 lg:px-4 mb-8">
                <?php get_template_part("template-parts/post-item"); ?>
              </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/4 lg:px-4">
        <?php get_template_part("template-parts/sidebar"); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>