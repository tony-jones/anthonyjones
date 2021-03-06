<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package anthonyjones
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
  <div class="col hide-on-small-only m2 l2">
    <div class="tabs-wrapper">
      <ul class="section table-of-contents">
        <li><a href="#introduction">Rules</a></li>
        <li><a href="#structure">Design</a></li>
        <li><a href="#initialization">Download</a></li>
      </ul>
    </div>
  </div> 
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->