
<form action="<?php echo home_url( '/' ); ?>" method="get">
  <div class="row">
    <div class="row collapse">
      <div class="eight columns">
        <input type="text" id="search" placeholder="Search" name="s" value="<?php the_search_query(); ?>" />
      </div>
      <div class="four columns">
        <button type="submit" id="search-button" class="postfix button">GO</a>
      </div>
    </div>
  </div>
</form>


