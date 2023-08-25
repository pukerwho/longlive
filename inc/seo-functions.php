<?php 

//h1
function get_city_service_heading($id) {
  $get_city = get_the_terms( $id, 'city' );
  $get_city = $get_city[0]->name;

  $get_service = get_the_terms( $id, 'services' );
  $get_service = $get_service[0]->name;

  $heading = $get_service . ' у місті ' . $get_city;
  return $heading;
}

//breadcrumbs title 
function get_city_service_breadcrumbs($id) {
  $get_city = get_the_terms( $id, 'city' );
  $get_city = $get_city[0]->name;

  $get_service = get_the_terms( $id, 'services' );
  $get_service = $get_service[0]->name;

  $heading = $get_service . ' у м.' . $get_city;
  return $heading;
}

?>