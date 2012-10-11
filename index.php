
<?php get_header(); ?>

	<div class="eight columns">
	  
  <?php if ( have_posts() ) : ?>
    
    <?php while ( have_posts() ) : the_post(); ?>
      
      <?php get_template_part( 'content', get_post_format() ); ?>
      
    <?php endwhile; ?>
		
    <div class="page-navi">

      <?php //posts_nav_link(' ', 'Previous', 'Next'); ?>
  	  <div id="pagination">
        <?php yeti_pagination(); ?>
      </div>
	  </div>

  <?php else: ?>
    
    <article id="post-0" class="post no-results not-found">
      <h4>Sorry, no posts to display!</h4>
    </article>
    
  <?php endif; ?>
  
  </div><!-- end columns -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>

