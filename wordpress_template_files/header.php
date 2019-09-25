<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="hero">
      <div id="background-img"></div>
      <div class="half coloured">
        <div>
          <h1><?php bloginfo('name'); ?></h1>
          <h2><?php bloginfo('description'); ?></h2>
          <button id="button-projects"><i class="far fa-arrow-alt-circle-down"></i><br />My Work</button>
        </div>
      </div>
      <div class="half white">
        <div>
          <h1><?php bloginfo('name'); ?></h1>
          <h2><?php bloginfo('description'); ?></h2>
          <button id="button-contact"><i class="far fa-handshake"></i><br />Hire Me</button>
        </div>
      </div>
    </div>
