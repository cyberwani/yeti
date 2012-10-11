
<?php get_header(); ?>
  
  <div class="sub-header">
    <div class="twelve columns">
      <h2>
        <?php if ( is_day() ) : ?>
          Daily Archives: <span><?php get_the_date(); ?></span>
        <?php elseif ( is_month() ) : ?>
          Monthly Archidves: <span><?php get_the_date( 'F Y' ); ?></span>
        <?php elseif ( is_year() ) : ?>
          Yearly Archives: <span><?php get_the_date( 'Y' ); ?></span>
        <?php else : ?>
          Blog Archives
        <?php endif; ?>
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
      <h2>Sorry, no posts to display!</h2>
    </article>
    
  <?php endif; ?>
  
  </div><!-- end columns -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>

