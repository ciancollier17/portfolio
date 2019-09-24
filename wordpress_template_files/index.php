<?php get_header(); ?>

<div class="content" id="projects">
  <div class="coloured">
    <div id="project-gallery">
      <div id="project-container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="project">
            <?php echo "<img src=\"" . get_the_post_thumbnail_url() . "\" alt=\"Screenshot 1\">"; ?>
            <div id="pt1" class="project-title">
              <h3><?php the_title(); ?></h3>
              <?php echo "<a href=\"" . get_the_permalink() . "\"><i class=\"far fa-eye\"></i> View Project</a>"; ?>
              <?php echo "<a href=\"" . get_post_meta(get_the_ID(), 'github', true) . "\" target=\"_blank\"><i class=\"fab fa-github\"></i> View Source</a>"; ?>
            </div>
          </div>
        <?php endwhile; else : ?>
	         <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
         <?php endif; ?>
      </div>
      <div id="pagination">
        <?php echo paginate_links(array(
          "prev_text" => "<span class=\"page arrow\"><i class=\"fas fa-angle-double-left\"></i></span>",
          "next_text" => "<span class=\"page arrow\"><i class=\"fas fa-angle-double-right\"></i></span>",
          "before_page_number" => "<span class=\"page\">",
          "after_page_number" => "</span>"
        )); ?>
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

<?php get_footer(); ?>
