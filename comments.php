<div id="comments">
  <?php if ( post_password_required() ) : ?>
  <div class="alert-box alert">
      This post is password protected. Enter the password to view comments.
    </div>
    
    </div>
<?php 

    return; 
   endif; 
 ?>


<?php if (have_comments()) : ?>

  <h3 id="comments">
    <?php comments_number('No Comments', 'One Comment', '% Comments' );?>
  </h3>


  <ul>    
    <?php wp_list_comments( array(
      'avatar_size' => 60,
      'style' => 'ul',
      'type' => 'comment',
      'callback' => 'yeti_comments'
    )); ?>
  </ul>
  
  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
    <nav id="comment-nav">
      <ul class="clearfix">
          <li><?php previous_comments_link() ?></li>
          <li><?php next_comments_link() ?></li>
      </ul>
    </nav>
  <?php endif; ?>
  
<?php else : ?>
  
    <p>Comments are closed here.</p>
  
<?php endif; ?>

<?php comment_form(); ?>

</div>


