
<?php get_header(); ?>

  <div class="row sub-header">
    <div class="twelve columns">
      <h2>
        Search Results for: <?php echo get_search_query(); ?> 
      </h2>
    </div>
  </div>
  
  <div class="eight columns">
    
  <?php if ( have_posts() ) : ?>
    
    <?php while ( have_posts() ) : the_post(); ?>
      
      <?php get_template_part( 'content', get_post_format() ); ?>
      
    <?php endwhile; ?>
    
    <div class="page-navi">

      <?php posts_nav_link(' ', 'Previous', 'Next'); ?>
  
    </div>

  <?php else: ?>
    
    <article id="post-0" class="post no-results not-found">
      <h2>Sorry, but nothing matched your search criteria.</h2>
    </article>
    
  <?php endif; ?>
  
  </div><!-- end columns -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>

