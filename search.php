
<?php get_header(); ?>  
 
  <div class="twelve columns archive-header">
    <h2>
      Search Results for <span class="s-results"><?php echo get_search_query(); ?></span>
    </h2>
  </div>
  
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
      <h4>Sorry, but nothing matched your search criteria.</h4>
    </article>
    
  <?php endif; ?>
  
  </div><!-- end columns -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>

