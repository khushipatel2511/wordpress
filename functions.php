<?php
 
 function html2wp_scripts() {
  wp_enqueue_style('style',get_stylesheet_uri());
 }
  
 function html2wp_theme_setup(){
   add_theme_support('custom-logo');
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_image_size('home-featured', 680, 400, array('center','center'));
   add_image_size('single-img', 600, 550, array('center','center'));
   add_theme_support('automatic-feed-links');

   register_nav_menus( array(
   	   'primary' => __('primary Menu', 'html2we')
   ));

 }

 add_action('after_setup_theme', 'html2wp_theme_setup');

 function html2wp_widgets_init() {
   
   register_sidebar( array(
  'name'           => __( 'primary sidebar', 'html2wp'),
  'id'             => 'main-sidebar',
  'description'    => 'Main sidebar on right side',
  'before_widget'  => '<li id="%1$s" class="wideettitle">',
  'after_widget'   => '</li>',
  'before_title'   => '<h2 class="widgettitle">',
  'after_title'    => '</h2>',

   ));
}


?>