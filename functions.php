<?php

/**
 * add theme supports
 * @todo add support for post-thumbnails
 * @todo register navigation menu(s)
 * @todo add formats for posts
 * */
function bc_theme_setup()
{
      // add post thumbnails support for theme
      add_theme_support('post-thumbnails');

      // add post formats support for theme
      add_theme_support('post-formats', [
            'aside', 'gallery', 'link'
      ]);

      // make support for navigation menus
      register_nav_menus([
            'primary' => __('Primary Menu'),
            'mobile' => __('Device Menu')
      ]);
}

// hook up the theme support

// setup various support for theme
add_action('after_setup_theme', 'bc_theme_setup');

/***
 * load styles and other scripts ressources
 * @todo register the ressources through wp hook
 */
function bc_load_ressources()
{
      wp_enqueue_style(
            'style',
            get_stylesheet_uri()
      );
}

function bc_load_scripts($scripts = []){
      foreach($scripts as $script){
            echo "<script src='" . $script . "'></script>";
      }
}

// hook the ressources to wordpress
add_action('wp_enqueue_scripts', 'bc_load_ressources');

/**
 * get title name of the page
 *
 * @return void
 */
function page_title(){
      global $post;
      return $post->post_title;
}

/**
 * require partial component for a specific path
 *
 * @param [type] $folder
 * @param [type] $partial
 * @return void
 */
function get_bendstrup_partial($root = './', $path, $partial){
      if(isset($root)) {
            require($root . $path . '/' . $partial . '.php');
      }
}

/**
 * dumping debugging data to screen
 * */
function debug($data){
      echo "<pre>";
      var_dump($data);
      echo "</pre>";
}

/**
 * fetching the template if used
 * */
 function get_bendstrup_template($template){
       if(is_page_template($template)) {
             require_once($template . '.php');
       }
 }