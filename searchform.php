<div class="row">
  <form action="/" method="get" class="searchform">
    <div class="input-field col s10 m6 no-padding">
      <input type="text" name="s" id="search" placeholder="Search this site" class="validate" value="<?php the_search_query(); ?>">
      <button class="btn" type="image" alt="Search">Search </button>
    </div>
  </form>
</div>