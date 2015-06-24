<div class="row">
  <form action="/" method="get">
    <div class="input-field col s10 m6 no-padding">
      <input type="text" name="s" id="search" class="validate" value="<?php the_search_query(); ?>">
      <label for="search">Search this site...</label>
      <button class="btn" type="image" alt="Search">Search </button>
    </div>
  </form>
</div>