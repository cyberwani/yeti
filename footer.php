<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package ModLearning
 * @since ModLearning 1.0
 */
?>
</div><!-- main row -->
  
  <footer>
    <div class="row">
      <div class="six columns">
        <p>Powered by <a href="http://wordpress.org/">WordPress</a> &amp; <a href="http://foundation.zurb.com/">Foundation</a></p>
      </div>
      <div class="six columns">
        <p class="right">Built by <a href="http://modlearning.com/">Modular Learning</a></p>
      </div>
    </div>
  </footer>
  
  <!-- Included JS Files (Compressed) -->
  <script src="<?php echo THEME_DIR; ?>/js/foundation/foundation.min.js" type="text/javascript"></script>
    
  <!-- Initialize JS Plugins -->
  <script src="<?php echo THEME_DIR; ?>/js/foundation/app.js" type="text/javascript"></script>
    
  <!-- Custom JS -->
  <script src="<?php echo THEME_DIR; ?>/js/foundation/custom.js" type="text/javascript"></script>

  <?php wp_footer(); ?>

</body>
</html>