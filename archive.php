<?php get_header(); ?>

<div class="container">
  <div class="flex flex-wrap items-center lg:-mx-4 mb-6">
    <div class="w-full lg:w-3/4 lg:px-4 mb-6 lg:mb-0">
      <div class="flex items-center -mx-2 lg:-mx-4">
        <div class="px-2 lg:px-4">
          <a href="<?php echo get_page_url('tpl_allposts'); ?>" class="text-base lg:text-lg text-gray-700">All</a>
        </div>
        <?php $all_cats = get_terms( array( 
          'taxonomy' => 'category', 
          'parent' => 0, 
          'hide_empty' => false,
          'exclude'  => 1,
        ));
        foreach ( array_slice($all_cats, 0, 9) as $all_cat ): ?>
          <div class="px-2 lg:px-4">
            <?php $cat_class = ( is_category( $all_cat->name ) ) ? 'active-link' : 'text-base lg:text-lg text-gray-700'; ?>
            <a href="<?php echo get_term_link($all_cat); ?>" class="<?php echo $cat_class; ?>"><?php echo $all_cat->name ?></a>
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
      <div class="flex flex-wrap -mx-4">
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
