<?php
/*
Template Name: All Posts
*/
?>
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
          global $wp_query, $wp_rewrite;  
          $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
          $all_posts = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 1,
            'order' => 'DESC',
            'paged' => $current,
          ) );
          if ($all_posts->have_posts()) : while ($all_posts->have_posts()) : $all_posts->the_post(); 
        ?>
          <div class="w-1/2 lg:w-1/3 px-4 mb-8">
            <?php get_template_part("template-parts/post-item"); ?>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <div class="pagination text-center">
        <?php 
          $big = 9999999991; // уникальное число
          echo paginate_links( array(
            'format'  => 'page/%#%',
            'total' => $all_posts->max_num_pages,
            'current' => $current,
            'prev_next' => true,
            'next_text' => (''),
            'prev_text' => (''),
          )); 
        ?>
      </div>
    </div>
    <div class="w-full lg:w-1/4 lg:px-4">
      <?php get_template_part("template-parts/sidebar"); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>