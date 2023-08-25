<?php
/*
Template Name: Чат ГПТ
*/
?>
<?php get_header(); ?>

<?php if ( current_user_can('administrator') ): ?>
<div class="container mb-12">
  <div class="flex flex-wrap lg:-mx-4">
    <div class="w-full lg:w-2/3 lg:px-4 mb-6 lg:mb-0">
      <div class="mb-4">
        <input type="text" id="chatkey" class="w-full border border-gray-300 mb-4">
        <textarea name="keywords" id="keywords" rows="10" class="w-full border border-gray-300"></textarea>
      </div>
      <button id="btn" class="btn bg-blue-500 text-xl text-white rounded-lg px-6 py-2">Add</button>
    </div>
    <div class="w-full lg:w-1/3 lg:px-4">
      <div id="chatgpt-results"></div>
    </div>
  </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>