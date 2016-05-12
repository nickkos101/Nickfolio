<?php

function assets() {
  //Styles
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic' );
  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/style.css' );

  //Scripts
  wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/scripts/masonry.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery', 'masonry'), null, true );
}
add_action( 'wp_enqueue_scripts', 'assets' );


function navigtaion() {
  register_nav_menus( array(
  	'primary_navigation' => 'The Menu in the Header.',
  	'social_navigation' => 'The Menu used for social links.',
    'footer_navigation' => 'The Menu used in the footer.',
  ) );
}
