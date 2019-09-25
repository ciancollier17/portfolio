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
    <?php the_content(); ?>
  <?php endwhile; else : ?>
   <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>
