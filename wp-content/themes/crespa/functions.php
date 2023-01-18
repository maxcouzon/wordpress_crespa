
<?php

function writestring($string)
{
echo($string);
} 

//writestring('hello');?>
<?php 
//load
function add_style() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '../assets/css/app.css', false);
  }
function add_script() {
    wp_enqueue_script('main-script', get_template_directory_uri() . '../assets/js/script.js', false);
  }
  add_action( 'wp_enqueue_scripts', 'add_style' );
?>