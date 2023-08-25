<?php
/*
Template Name: Simple Single
Template Post Type: post
*/
?>
<?php 
get_header(); 
$currentId = get_the_ID();
$countNumber = tutCount($currentId); 
$Parsedown = new Parsedown();
?>

<div class="container">
  <div class="flex flex-wrap lg:-mx-6 mb-12">
    <div class="w-full lg:w-2/3 lg:px-6 mb-6 lg:mb-0">
      <div class="mb-6">
        <h1 class="text-4xl font-black"><?php the_title(); ?></h1>
      </div>
      <!-- Meta -->
      <div class="flex items-center gap-x-2 text-gray-600 font-medium mb-12">
        <div class=""><?php echo get_the_modified_time('F j, Y'); ?></div>
        <div class="bg-gray-500 w-[4px] h-[4px] rounded-full"></div>
        <div class="post-time-read"><span></span> min read</div>
        <div class="bg-gray-500 w-[4px] h-[4px] rounded-full"></div>
        <div class="flex items-center">
          <div class="mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <div><?php echo $countNumber; ?></div>
        </div>
      </div>
      <!-- end Meta -->

      <!-- Content -->
      <div class="content" itemprop="articleBody">
        <div class="single-subjects bg-yellow-50 border rounded p-4 mb-5">
          <div class="text-2xl font-bold uppercase mb-3">
            <?php _e('Content','treba-wp'); ?>:
          </div>
          <div class="single-subjects-inner"></div>
        </div>
        <div>
          <?php the_content(); ?>
        </div>
      </div>
      <!-- END Content -->

      <!-- Share -->
      <div class="flex flex-col items-center text-center bg-blue-100 rounded px-4 py-8 mb-6">
        <div class="text-xl font-semibold mb-4"><?php _e("Share this article", "treba-wp"); ?></div>
        <div><?php do_action('show_social_share_buttons'); ?></div>
      </div>
      <!-- END Share -->

      <!-- Other -->
      <div>
        <div class="bg-black/90 rounded p-4 mb-12">
          <h2 class="text-3xl text-white font-semibold text-center"><?php _e("Other posts", "treba-wp"); ?></h2>
        </div>
        
        <?php 
          $posts = new WP_Query( array( 
            'post_type' => 'post', 
            'posts_per_page' => 5,
            'order' => 'DESC',
            'post__not_in' => array($currentId),
          ) );
          if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); 
        ?>
          <?php get_template_part("template-parts/post-item"); ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
      <!-- END Other -->
    </div>
    <div class="w-full lg:w-1/3 lg:px-6">
      <?php get_template_part("template-parts/sidebar"); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>