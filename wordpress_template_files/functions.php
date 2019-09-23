<?php
  function ciancollier_get_scripts() {
    wp_enqueue_script('jquery');
    wp_register_script('FontAwesome', "https://kit.fontawesome.com/f7f22b759e.js");
    wp_enqueue_script('FontAwesome');
    wp_register_style('CianCollierMainStylesheet', get_stylesheet_uri());
    wp_enqueue_style('CianCollierMainStylesheet');
    wp_register_style('CianCollierFonts', 'https://fonts.googleapis.com/css?family=Roboto|Source+Serif+Pro&display=swap');
    wp_enqueue_style('CianCollierFonts');
  }

  add_action('wp_enqueue_scripts', 'ciancollier_get_scripts');
?>
