<?php get_header(); ?>

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
      <button id="button-contact"><i class="far fa-handshake"></i><br />Email Me</button>
    </div>
  </div>
</div>

<div class="content" id="projects">
  <div class="coloured">
    <div id="project-gallery">
      <div id="project-container">
        <?php $count = 1; ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="project">
            <?php echo "<img src=\"" . get_the_post_thumbnail_url() . "\" alt=\"Screenshot 1\">"; ?>
            <?php echo "<div id=\"pt" . $count . "\" class=\"project-title\">"; ?>
              <h3><?php the_title(); ?></h3>
              <?php echo "<a href=\"" . get_the_permalink() . "\"><i class=\"far fa-eye\"></i> View Project</a>"; ?>
              <?php echo "<a href=\"" . get_post_meta(get_the_ID(), 'github', true) . "\" target=\"_blank\"><i class=\"fab fa-github\"></i> View Source</a>"; ?>
            </div>
          </div>
          <?php $count = $count + 1; ?>
        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
      </div>
      <div id="pagination">
        <?php
          echo paginate_links(array(
            "prev_text" => "<span class=\"page arrow\"><i class=\"fas fa-angle-double-left\"></i></span>",
            "next_text" => "<span class=\"page arrow\"><i class=\"fas fa-angle-double-right\"></i></span>",
            "before_page_number" => "<span class=\"page\">",
            "after_page_number" => "</span>",
            "format" => '/page/%#%',
            "base" => home_url() . "%_%#project-gallery"
          ));
        ?>
      </div>
    </div>
  </div>
  <div class="white">
    <div>
      <h2 class="section-title">About Me</h2>
      <?php echo get_option('about-section'); ?>
    </div>
  </div>
</div>

<div class="content" id="contact">
  <div class="coloured">
    <?php if (is_active_sidebar('contact_coloured')) : ?>
      <div class="widget-container">
        <?php dynamic_sidebar('contact_coloured'); ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="white">
    <?php if (is_active_sidebar('contact_white')) : ?>
      <div>
        <?php dynamic_sidebar('contact_white'); ?>
      </div>
    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
