<?php
require_once 'helpers.php';

function greg_bastianelli_enqueue_scripts() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
  }
  add_action('wp_enqueue_scripts', 'greg_bastianelli_enqueue_scripts');

  function greg_bastianelli_register_menus() {
    register_nav_menus([
      'main-menu' => __('Main Menu', 'greg-bastianelli'),
    ]);
  }
  add_action('init', 'greg_bastianelli_register_menus');

  function enqueue_gsap_script() {
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js', array(), null, true);
  }
  add_action('wp_enqueue_scripts', 'enqueue_gsap_script');
  
  