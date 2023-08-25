<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', __('Treba Settings') )
  ->add_tab( __('General'), array(
    Field::make( 'text', 'crb_footer_links_numbers', 'Кількість посилань' ),
  ))
  ->add_tab( __('SEO'), array(
    Field::make( 'html', 'crb_seo_mainpage', __( 'SEO Mainpage' ) )->set_html( sprintf( '<b>ℹ️ Main page</b>' ) ),
    Field::make( 'text', 'crb_seo_mainpage_title', 'Головна сторінка - Title' ),
    Field::make( 'text', 'crb_seo_mainpage_description', 'Головна сторінка - Description' ),
  ))
  ->add_tab( __('Social'), array(
    Field::make( 'text', 'crb_social_telegram', 'Telegram' ),
    Field::make( 'text', 'crb_social_twitter', 'Twitter' ),
    Field::make( 'text', 'crb_social_youtube', 'Youtube' ),
    Field::make( 'text', 'crb_social_linkedin', 'Linkedin' ),
    Field::make( 'text', 'crb_social_facebook', 'Facebook' ),
    Field::make( 'text', 'crb_social_medium', 'Medium' ),
    Field::make( 'text', 'crb_social_instagram', 'Instagram' ),
  ))
  ->add_tab( __('Scripts'), array(
    Field::make( 'textarea', 'crb_google_analytics', 'Google Analytics' ),
    Field::make( 'footer_scripts', 'crb_footer_scripts', 'Scripts footer' )
  ));
}

?>