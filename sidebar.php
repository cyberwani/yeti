<div class="three columns off-by-one">
  
  <?php if ( is_active_sidebar('main-sidebar') ) : ?>
    
    <?php dynamic_sidebar( 'main-sidebar' ); ?>
    
  <?php else : ?>
    
    <div class="alert-box secondary no-widgets">You have no active widgets.</div>
    
  <?php endif; ?>

</div>