
<?php

function writestring($string)
{
echo($string);
} 

//writestring('hello');?>
<?php 
//load
function add_style() {
  wp_enqueue_style('app', get_template_directory_uri().'/assets/css/app.css', array(), 1, 'all');
}
add_action( 'wp_enqueue_scripts', 'add_style' );
function add_script() {
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', false);
  }
  add_action( 'wp_enqueue_scripts', 'add_style' );

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}?>