<?php get_header(); ?>
  <div class="container">
    <div class="flex flex-wrap items-center lg:-mx-4 mb-6">
      <div class="w-full lg:w-3/4 lg:px-4 mb-6 lg:mb-0">
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
        <div class="flex flex-wrap -mx-4 mb-6">
          <?php 
            $posts = new WP_Query( array( 
              'post_type' => 'post', 
              'posts_per_page' => 20,
              'order' => 'DESC',
            ) );
            if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); 
          ?>
            <div class="w-1/2 lg:w-1/3 px-4 mb-8">
              <?php get_template_part("template-parts/post-item"); ?>
            </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="flex justify-center">
          <a href="<?php echo get_page_url('tpl_allposts'); ?>" class="text-blue-500 border border-blue-500 rounded px-4 py-2">All posts</a>
        </div>
      </div>
      <div class="w-full lg:w-1/4 lg:px-4">
        <?php get_template_part("template-parts/sidebar"); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>