<div class="menu">
  <div class="menu-wrap h-full flex flex-col justify-between px-2 lg:px-0 py-4 lg:py-5 lg:m-2">
    <div>
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center text-xl relative px-2">
          <a href="<?php echo get_home_url(); ?>" class="absolute-link"></a>
          <span class="inline-block w-[20px] h-[20px] bg-indigo-500 mr-2"></span>
          <span class="uppercase italic font-black">Treba</span>
        </div>
        <div class="menu-toggle-close block lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </div>
      </div>
      <!-- menu -->
      <nav class="border-b border-zinc-300 dark:border-zinc-600 pb-3 mb-3">
        <ul class="font-medium text-gray-700 dark:text-gray-300">
          <li class="menu-item relative hover:bg-gray-300 dark:hover:bg-zinc-700 rounded-lg mb-1" data-class-archive="home" data-class-single="none" data-class-tax="none">
            <a href="<?php echo get_home_url(); ?>" class="absolute-link"></a>
            <div class="flex items-center p-2">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
              </div>
              <div>
                <?php _e("Головна", "treba-wp"); ?>
              </div>
            </div>
          </li>
          <li class="menu-item relative hover:bg-gray-300 dark:hover:bg-zinc-700 rounded-lg mb-1" data-class-archive="page-template-page-about" data-class-single="none" data-class-tax="none">
            <a href="<?php echo get_page_url('page-about'); ?>" class="absolute-link"></a>
            <div class="flex items-center p-2">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
              </div>
              <div>
                <?php _e("Про сайт", "treba-wp"); ?>
              </div>
            </div>
          </li>
          <li class="menu-item relative hover:bg-gray-300 dark:hover:bg-zinc-700 rounded-lg mb-1" data-class-archive="post-type-archive-company" data-class-single="single-company" data-class-tax="tax-services">
            <a href="<?php echo get_post_type_archive_link('company'); ?>" class="absolute-link"></a>
            <div class="flex items-center justify-between">
              <div>
                <div class="flex items-center p-2">
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                    </svg>
                  </div>
                  <div>
                    <?php _e("Компанії", "treba-wp"); ?>
                  </div>
                </div>
              </div>
              <div class="px-2">
                <div class="w-min-[20px] h-min-[20px] flex items-center justify-center text-sm opacity-75 bg-gray-400/40 rounded p-1"><?php $companies = get_posts('post_type=company&suppress_filters=0&posts_per_page=-1'); $company_count = count($companies); echo $company_count; ?></div>  
              </div>
            </div>
          </li>
          <li class="menu-item relative hover:bg-gray-300 dark:hover:bg-zinc-700 rounded-lg mb-1" data-class-archive="post-type-archive-cases" data-class-single="single-cases" data-class-tax="none">
            <a href="<?php echo get_post_type_archive_link('cases'); ?>" class="absolute-link"></a>
            <div class="flex items-center justify-between">
              <div>
                <div class="flex items-center p-2">
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                    </svg>
                  </div>
                  <div>
                    <?php _e("Кейси", "treba-wp"); ?>
                  </div>
                </div>
              </div>
              <div class="px-2">
                <div class="w-min-[20px] h-min-[20px] flex items-center justify-center text-sm opacity-75 bg-gray-400/40 rounded p-1"><?php $cases = get_posts('post_type=cases&suppress_filters=0&posts_per_page=-1'); $cases_count = count($cases); echo $cases_count; ?></div>  
              </div>
            </div>
          </li>
          <li class="relative hover:bg-gray-300 dark:hover:bg-zinc-700 rounded-lg mb-1">
            <a href="<?php echo get_page_url('page-blog'); ?>" class="absolute-link"></a>
            <div class="flex items-center justify-between">
              <div>
                <div class="flex items-center p-2">
                  <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                  </div>
                  <div>
                    <?php _e("Блог", "treba-wp"); ?>
                  </div>
                </div>
              </div>
              <div class="px-2">
                <div class="w-min-[20px] h-min-[20px] flex items-center justify-center text-sm opacity-75 bg-gray-400/40 rounded p-1"><?php $all_posts = get_posts('post_type=post&suppress_filters=0&posts_per_page=-1'); $posts_count = count($all_posts); echo $posts_count; ?></div>  
              </div>
            </div>
          </li>
          <li class="menu-item relative hover:bg-gray-300 dark:hover:bg-zinc-700 rounded-lg mb-1" data-class-archive="post-type-archive-dictionary" data-class-single="single-dictionary" data-class-tax="none">
            <a href="<?php echo get_post_type_archive_link('dictionary'); ?>" class="absolute-link"></a>
            <div class="flex items-center p-2">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
              </div>
              <div>
                <?php _e("Словник", "treba-wp"); ?>
              </div>
            </div>
          </li>
          <li class="relative hover:bg-gray-300 dark:hover:bg-zinc-700 rounded-lg mb-1">
            <a href="" class="absolute-link"></a>
            <div class="flex items-center p-2">
              <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>
              </div>
              <div>
                <?php _e("Контакти", "treba-wp"); ?>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <?php if (function_exists('pll_the_languages')): ?>
      <div class="px-2">
        <div class="flex items-center text-zinc-600 dark:text-zinc-300 mb-2">
          <div class="mr-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
            </svg>
          </div>
          <div class="text-sm font-bold uppercase"><?php _e("Мова", "treba-wp"); ?>:</div>
        </div>
        <div class="lang">
          <?php
            pll_the_languages(); 
          ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <div class="px-2">
      <div class="flex items-center bg-gray-300 dark:bg-zinc-700 rounded-lg p-0.5">
        <div class="dark-mode w-1/2 cursor-pointer js-toggle-light" data-light="on">
          <div class="dark-mode-item bg-white dark:bg-transparent flex justify-center items-center rounded-lg p-1" >
            <div class="mr-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
              </svg>
            </div>
            <div><?php _e("День", "treba-wp"); ?></div>
          </div>
        </div>
        <div class="dark-mode w-1/2 cursor-pointer js-toggle-light" data-light="off">
          <div class="dark-mode-item bg-transparent dark:bg-zinc-600 flex justify-center items-center rounded-lg p-1">
            <div class="mr-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
              </svg>
            </div>
            <div><?php _e("Ніч", "treba-wp"); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    
</div>