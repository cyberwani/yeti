
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if ( has_post_thumbnail() ) : ?>
      
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
           
    <?php endif; ?>
        
    <h2>
      <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
        
    <div class="entry-meta">
      <span class="date"><?php echo get_the_date(); ?></span>
      <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'the-comment'); ?>
    </div>
          
    <?php the_content(); ?>
        
    <div class="entry-footer">
      <span class="the-author">By <?php the_author(); ?></span>
      <span class="cats">Categories: <?php echo get_the_category_list( ', ' ); ?></span>
    </div>
    
    <div class="the-tags">
      <?php 
      $posttags = get_the_tags();
      if ($posttags) {
        foreach($posttags as $tag) {
          echo '<span class="label">' . $tag->name . '</span> '; 
        }
      } 
      ?>
    </div>        
          
  </article>