<?php get_header(); ?>

<div class="content-project">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <i><?php echo "<a href=\"#\">"; the_author(); echo "</a> on <a href=\"#\">"; the_date(); echo "</a>"; ?></i>
    <br />
    <div id = "tags">
    <?php
      $tags = get_the_tags();
      if ($tags) {
        foreach ($tags as $tag) {
          echo "<div class=\"tag\"><a href=\"#\">" . $tag->name . "</a></div>";
        }
      }
    ?>
    </div>
    <?php echo "<a id=\"home-button-link\" href=\"" . get_home_url() . "\">"; ?>
    <i class="fas fa-home"></i>
    <?php echo "</a>"; ?>
    <div class="featured-img">
      <?php the_post_thumbnail(); ?>
      <div class="buttons">
        <?php
          $livedemo = get_post_meta(get_the_ID(), 'live-demo', true);

          if ($livedemo) {
            echo "<a href=\"" . $livedemo . "\"><i class=\"fas fa-laptop-code\"></i> Live Demo</button></a>";
          }

          $github = get_post_meta(get_the_ID(), 'github', true);

          if ($github) {
            echo "<a href=\"" . $github . "\"><i class=\"fab fa-github\"></i> View Code</button></a>";
          }
        ?>
      </div>
    </div>
    <?php the_content(); ?>
  <?php endwhile; else : ?>
   <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
