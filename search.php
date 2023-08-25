<?php get_header(); ?>
<div class="container">
  <div class="flex flex-wrap lg:-mx-6">
    <div class="w-full lg:w-2/3 lg:px-6 mb-12 lg:mb-0">
      <h1 class="text-4xl font-black mb-10"><?php printf( esc_html__( 'Search results for: %s', 'treba-wp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
      <div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php get_template_part("template-parts/post-item"); ?>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="w-full lg:w-1/3 lg:px-6">
      <?php get_template_part("template-parts/sidebar"); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>