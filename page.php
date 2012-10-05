<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package ModLearning
 * @since ModLearning 1.0
 */
?>

<?php get_header(); ?>

  <div class="eight columns">
    
    <h2>Default Page Template</h2>
    
    <h4>Browse by Month</h4>
    <ul>
      <?php
      $args = array(
        'type' => 'monthly'
      );
      
      wp_get_archives( $args );
      ?>
    </ul>
    
    <h4>Browse by Category</h4>
    <ul>
      <?php
      $args = array(
        'title_li' => ''
      );
      
      wp_list_categories( $args );
      ?>
    </ul>
    
    <h4>Browse by Tag</h4>
    <ul>
      <?php
      $args = array(
        'orderby' => 'name',
        'order' => 'ASC'
      );
      
      wp_tag_cloud( $args );
      ?>
    </ul>
  
  </div><!-- end columns -->
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>

