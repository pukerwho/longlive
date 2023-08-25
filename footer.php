</div>
<!-- end wrap -->

<footer class="bg-black/90 text-gray-200 py-8">
  <div class="container">
    <div class="flex flex-wrap flex-col-reverse lg:flex-row lg:-mx-6">
      <div class="w-full lg:w-1/2 lg:px-6">
        <div class="mb-6">
          <a href="<?php echo get_home_url(); ?>" class="logo text-lg font-extrabold text-gray-200">HowLongLive</a>
        </div>
        <div>
          <div class="mb-4">This website provides a collection of articles detailing the average lifespans of various entities, including people, animals, and more.</div>
          <div>© 2023</div>
        </div>
      </div>
      <div class="w-full lg:w-1/4 lg:px-6 mb-6 lg:mb-0">
        <div class="text-xl font-black mb-4"><?php _e("Resources", "treba-wp"); ?></div>
        <div>
          <?php wp_nav_menu([
            'theme_location' => 'footer',
            'container' => 'div',
            'menu_class' => 'flex top-menu'
          ]); ?>
        </div>
      </div>
      <div class="w-full lg:w-1/4 lg:px-6 mb-6 lg:mb-0">
        <div class="text-xl font-black mb-4"><?php _e("Contact", "treba-wp"); ?></div>
        <div class="flex items-center">
          <div class="mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>
          </div>
          <div><a href="mailto:info@howlonglive.com" class="text-lg">info@howlonglive.com</a></div>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>