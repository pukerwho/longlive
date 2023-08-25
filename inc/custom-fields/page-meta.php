<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
	Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', 'IN', array('page-about.php') )
    ->add_fields( array(
      Field::make( 'complex', 'crb_about_whyus_partner', 'Чому Мідсан і Scentair кращі партнери?' )->set_layout('tabbed-horizontal')->add_fields( array(
        Field::make( 'text', 'crb_about_whyus_partner_text', 'Текст' ),
        Field::make( 'text', 'crb_about_whyus_partner_link', 'Посилання' ),
      )),
      Field::make( 'complex', 'crb_about_midsun_partner', 'Чому Midsun кращий партнер?' )->set_layout('tabbed-horizontal')->add_fields( array(
        Field::make( 'image', 'crb_about_midsun_partner_img', 'Зображення' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_about_midsun_partner', 'Текст' ),
      )),
      Field::make( 'complex', 'crb_about_blocks', 'Блоки' )->set_layout('tabbed-horizontal')->add_fields( array(
        Field::make( 'image', 'crb_about_blocks_img', 'Зображення' )->set_value_type( 'url'),
        Field::make( 'rich_text', 'crb_about_blocks_content', 'Текст' ),
        Field::make( 'text', 'crb_about_blocks_btn', 'Текст кнопки' ),
      )),
  ) );

  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->add_fields( array(
      Field::make( 'textarea', 'crb_page_description', 'Короткий опис' ),
      Field::make( 'complex', 'crb_page_blocks', 'Блоки' )->set_layout('tabbed-horizontal')->add_fields( array(
        Field::make( 'image', 'crb_page_blocks_img', 'Зображення' ),
        Field::make( 'rich_text', 'crb_page_blocks_content', 'Текст' ),
      )),
  ) );
}

?>