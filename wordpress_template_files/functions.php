<?php
  function ciancollier_get_scripts() {
    wp_enqueue_script('jquery');
    wp_register_script('FontAwesome', "https://kit.fontawesome.com/f7f22b759e.js");
    wp_enqueue_script('FontAwesome');
    wp_register_script('CianCollierScripts', get_template_directory_uri() . "/scripts.js", array('jquery'), false, true);
    wp_enqueue_script('CianCollierScripts');
    wp_register_style('CianCollierMainStylesheet', get_stylesheet_uri());
    wp_enqueue_style('CianCollierMainStylesheet');
    wp_register_style('CianCollierFonts', 'https://fonts.googleapis.com/css?family=Roboto|Source+Serif+Pro&display=swap');
    wp_enqueue_style('CianCollierFonts');
  }

  function ciancollier_theme_settings() {
    echo "<div class='wrap'>";
    echo "<h1>Cian Collier Theme Settings</h1>";
    echo "<form method='post' action='options.php'>";
    settings_fields('ciancollier-theme');
    do_settings_sections('ciancollier-theme');
    submit_button();
    echo "</form>";
    echo "</div>";
  }

  function ciancollier_admin_menu() {
    add_theme_page('Cian Collier Theme Settings', 'Theme Settings', 'manage_options', 'ciancollier-theme-menu', 'ciancollier_theme_settings');
  }

  function ciancollier_register_settings() {
    register_setting('ciancollier-theme', 'about-section');

    add_settings_section('about-settings-section', 'About Me Settings', null, 'ciancollier-theme');
    add_settings_field('about', 'About Me Text', 'about_callback', 'ciancollier-theme', 'about-settings-section');
  }

  function about_callback() {
    $current_value = get_option('about-section');
    echo "<textarea id='about' name='about-section'>" . $current_value . "</textarea>";
  }

  add_action('wp_enqueue_scripts', 'ciancollier_get_scripts');
  add_action('admin_menu', 'ciancollier_admin_menu');
  add_action('admin_init', 'ciancollier_register_settings');

  // Add support for thumbnails for displaying them on the project gallery
  add_theme_support('post-thumbnails');
?>
