<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
	Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'post' )
    ->add_fields( array(
      Field::make( 'html', 'crb_heading_seo', __( 'INFO Heading' ) )->set_html( sprintf( '<b>SEO</b>' ) ),
      Field::make( 'text', 'crb_post_title', 'Title' ),
      Field::make( 'text', 'crb_post_description', 'Description' ),
      Field::make( 'text', 'crb_post_keywords', 'Keywords' ),

      Field::make( 'checkbox', 'crb_post_top', 'Топ запис' ),
      Field::make( 'checkbox', 'crb_post_mainhide', 'Не виводити на головній сторінці' ),
  ) );
}

?>