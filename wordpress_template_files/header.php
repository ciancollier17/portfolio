<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
      function get_page_title() {
        $title = bloginfo('name');

        if (is_single()) {
          $title = $title . single_post_title(": ", true);
        }

        return $title;
      }
    ?>
    <title><?php get_page_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
