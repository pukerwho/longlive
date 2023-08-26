<?php get_header(); ?>
<div class="container">
  <div class="flex flex-wrap lg:-mx-4 mb-10">
    <div class="w-full lg:w-3/4 lg:px-4 mb-6 lg:mb-0">
      <h1 class="text-4xl font-bold mb-6"><?php printf( esc_html__( 'Search results for: %s', 'treba-wp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
      <div class="mb-6">
        <?php echo get_search_form(); ?>
      </div>
      <div class="flex flex-wrap -mx-4 mb-6">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="w-1/2 lg:w-1/3 px-4 mb-8">
            <?php get_template_part("template-parts/post-item"); ?>
          </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="w-full lg:w-1/4 lg:px-4">
      <?php get_template_part("template-parts/sidebar"); ?>
    </div>
  </div>

</div>
<?php get_footer(); ?>