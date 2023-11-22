<div class="bg-gray-100 rounded-lg px-4 py-5 mb-6">
  <div class="text-xl font-bold mb-4">Popular Posts</div>
  <div>
    <?php
      $popular_posts = new WP_Query( array( 
        'post_type' => 'post', 
        'posts_per_page' => 5,
        'meta_key' => 'post_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
      ) );
      if ($popular_posts->have_posts()) : while ($popular_posts->have_posts()) : $popular_posts->the_post();
    ?>
      <div class="relative border-b border-gray-300 last-of-type:border-transparent pb-2 last-of-type:pb-0 mb-2 last-of-type:mb-0">
        <a href="<?php the_permalink(); ?>" class="w-full h-full absolute left-0 top-0"></a>
        <div class="text-gray-600 text-light"><?php the_title(); ?></div>
        <div class="text-sm opacity-50">
          <?php _e("Views", "treba-wp"); ?>: <?php echo get_post_meta( get_the_ID(), 'post_count', true ); ?>
        </div>
      </div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</div>

<div class="bg-blue-50 rounded-lg px-4 py-5 mb-6">
  <div class="text-xl font-bold mb-4">Top 5 Dog Breeds with Impressive Longevity</div>
  <div class="text-gray-600 font-light leading-6 mb-2">
    <ul><li class="list-disc ml-4 mb-1"><span class="font-medium">Chihuahua</span> - 12-20 years</li></ul>
    <ul><li class="list-disc ml-4 mb-1"><span class="font-medium">Dalmatian</span> - 10-13 years</li></ul>
    <ul><li class="list-disc ml-4 mb-1"><span class="font-medium">Yorkshire Terrier</span> - 11-15 years</li></ul>
    <ul><li class="list-disc ml-4 mb-1"><span class="font-medium">Pug</span> - 12-15 years</li></ul>
    <ul><li class="list-disc ml-4"><span class="font-medium">Shih Tzu</span> - 10-18 years</li></ul>
  </div>
  <div class="text-sm text-gray-600 font-light leading-6">It's important to note that the lifespan of dogs can vary significantly based on factors such as genetics, care, living conditions, and overall health.</div>
</div>

<div class="bg-gray-100 rounded-lg px-4 py-5 mb-6">
  <div class="text-xl font-bold mb-4">What dogs are most loveable?</div>
  <div class="text-center text-blue-500 mb-4">Take part in the survey</div>
  <div>
    <div class="flex items-center justify-between bg-gray-200 border border-transparent rounded text-gray-600 cursor-pointer px-4 py-2 mb-2 vote-item" data-name="Rottweiler">
      <div>Rottweiler</div>
      <div class="vote-item-result"><?php echo get_option("vote_Rottweiler"); ?></div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 border border-transparent rounded text-gray-600 cursor-pointer px-4 py-2 mb-2 vote-item" data-name="Husky">
      <div>Husky</div>
      <div class="vote-item-result"><?php echo get_option("vote_Husky"); ?></div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 border border-transparent rounded text-gray-600 cursor-pointer px-4 py-2 mb-2 vote-item" data-name="Beagle">
      <div>Beagle</div>
      <div class="vote-item-result"><?php echo get_option("vote_Beagle"); ?></div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 border border-transparent rounded text-gray-600 cursor-pointer px-4 py-2 mb-2 vote-item" data-name="GermanShepherd">
      <div>German Shepherd</div>
      <div class="vote-item-result"><?php echo get_option("vote_GermanShepherd"); ?></div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 border border-transparent rounded text-gray-600 cursor-pointer px-4 py-2 mb-2 vote-item" data-name="Pug">
      <div>Pug</div>
      <div class="vote-item-result"><?php echo get_option("vote_Pug"); ?></div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 border border-transparent rounded text-gray-600 cursor-pointer px-4 py-2 mb-2 vote-item" data-name="CockerSpaniel">
      <div>Cocker Spaniel</div>
      <div class="vote-item-result"><?php echo get_option("vote_CockerSpaniel"); ?></div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 border border-transparent rounded text-gray-600 cursor-pointer px-4 py-2 mb-2 vote-item" data-name="Chihuahua">
      <div>Chihuahua</div>
      <div class="vote-item-result"><?php echo get_option("vote_Chihuahua"); ?></div>
    </div>
    <div class="flex items-center justify-between bg-gray-200 border border-transparent rounded text-gray-600 cursor-pointer px-4 py-2 mb-2 vote-item" data-name="Other">
      <div>Other</div>
      <div class="vote-item-result"><?php echo get_option("vote_Other"); ?></div>
    </div>
  </div>
</div>