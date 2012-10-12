
<?php get_header(); ?>  
 
  <div class="twelve columns archive-header">
    <h2>
      <?php if ( is_day() ) : ?>
        Daily Archives for <span><?php echo get_the_date(); ?></span>
      <?php elseif ( is_month() ) : ?>
        Monthly Archives for <span><?php echo get_the_date( 'F Y' ); ?></span>
      <?php elseif ( is_year() ) : ?>
        Yearly Archives for <span><?php echo get_the_date( 'Y' ); ?></span>
      <?php elseif ( is_category() ) : ?>
        Category: <span><?php echo single_cat_title(); ?></span>
      <?php elseif ( is_tag() ) : ?>
        Tagged: <span><?php echo single_tag_title(); ?></span>
      <?php else : ?>
        Blog Archives
      <?php endif; ?>
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
      <h4>Sorry, no posts to display!</h4>
    </article>
    
  <?php endif; ?>
  
  </div><!-- end columns -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>

