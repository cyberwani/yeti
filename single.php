
<?php get_header(); ?>

  <div class="eight columns">
  
    <?php while ( have_posts() ) : the_post(); ?>
      
      <?php get_template_part( 'content', 'single' ); ?>
      
      <?php comments_template( '', true ); ?>
      
    <?php endwhile; ?>
  
  </div><!-- end columns -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>

