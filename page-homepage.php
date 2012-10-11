<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
 
  <div class="twelve columns intro">
    Welcome to <span class="yeti">Yeti</span>
  </div> 

  <div class="twelve columns">
    <div id="featured">
      <img src="<?php echo get_template_directory_uri(); ?>/images/yeti-featured1.png" alt="slide image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/yeti-featured2.png" alt="slide image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/yeti-featured3.png" alt="slide image">
    </div>
  </div>
  

  <div class="b-preview">
    
    <div class="twelve columns">
      <h2>LATEST NEWS</h2>
    </div>
    
    <?php
    global $post;
    
    $args = array( 'numberposts' => 4 );
    $latest_posts = get_posts( $args );
    foreach( $latest_posts as $post ) :  setup_postdata($post); 

    ?>
      <div class="three columns">          
        <article id="post-<?php the_ID(); ?>" <?php post_class('art-front'); ?>>
          
          <?php if ( has_post_thumbnail() ) : ?>  
            <?php the_post_thumbnail( 'yeti-featured' ); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-holdit.png" alt="slide image">
          <?php endif; ?>
          <h4 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"> <?php the_title(); ?> </a>
          </h4>
          
          <span class="entry-meta-front"><time datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
            <?php if ( comments_open() ) : ?>
              &bull; <?php comments_popup_link( 'No Comments', '1 Comment', '% Comments' ); ?>
            <?php endif; ?>
          </span>
          
          <?php the_excerpt(); ?>
          
        </article>
      </div>
    <?php endforeach; ?>
        
  </div>  
  
<?php get_footer(); ?>
