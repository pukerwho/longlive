<?php get_header(); ?>

<div class="container pt-6">
  <div class="w-full lg:w-2/3 mx-auto mb-12">
    <h1 class="text-4xl font-black border-b border-gray-200 pb-6 mb-6"><?php the_title(); ?></h1>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>