<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package anthonyjones
 */
?>

	</div><!-- #content -->
  </div> <!-- animsition div -->
  <!-- Footer -->
  <footer class="site-footer white" role="contentinfo">
    <div class="footer-bar">
      <div class="row">
        <div class="copyright">
          <div class="left location hide-on-small-only">
            <?php printf( __( '%1$s %2$s.', 'anthonyjones' ), 'Source code:', '<a href="https://github.com/tony-jones/anthonyjones" target="_blank" class="orange-text text-darken-3" rel="designer"><i class="fa fa-github"></i> GitHub</a>' ); ?>
          </div>
          <div class="right">
            <div class="waves-effect waves-black top-article">
              <a href="#back-to-top"><i class="fa fa-caret-square-o-up"></i> TOP</a>
            </div>
            <div class="waves-effect waves-black next-article">
              <a rel="next" class="modal-trigger" href="#modal3">More Articles <i class="mdi-navigation-arrow-forward"></i></a>      
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Recommended Articles Footer -->
  <div id="modal3" class="modal bottom-sheet">
    <div class="modal-content">
      <a href="#" class="waves-effect close-arrow close-x close-button">
        <i class="mdi-navigation-close"></i>
      </a>
      <h5 class="footer-title">Recommended Articles</h5>
       <ul class="collection">
        <div class="row">
          <?php $recentPosts = new WP_Query(); ?>
          <?php $recentPosts->query('showposts=4'); ?>
          <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
          <div class="col s12 m6 l6">
            <a class="close-x" href="<?php echo get_permalink(); ?>" style="cursor: pointer; display: block; overflow: hidden;">
            <div class="recommended">
              <li class="waves-effect waves-dark collection-item avatar">
                <img src="<?=$url?>" alt="" class="circle responsive-img">
                <span class="title grey-text"><?php the_title(); ?></span>
                <p>
                  <?php get_the_subtitle( $post ); ?>
                </p>

                <?php $category = get_the_category_list( __( ', ', 'anthonyjones' ) ); ?>
                <span class="footer-categories"
                  <?php echo $category ?>
                </span>
              </li>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
        </ul>
    </div>
  </div>
</div><!-- #page -->


<?php wp_footer(); ?>
<script>
/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
var disqus_shortname = 'anthonyjones'; // required: replace example with your forum shortname

/* * * DON'T EDIT BELOW THIS LINE * * */
(function () {
var s = document.createElement('script'); s.async = true;
s.type = 'text/javascript';
s.src = '//' + disqus_shortname + '.disqus.com/count.js';
(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
}());
</script>

<script>
(function( $ ) {
  $(function() {
    if( $( ".my-post-like" ).length ) {
      $( ".my-post-like" ).myPostLikes();
    }
  });
  $.fn.myPostLikes = function( options ) {
    options = $.extend({
      countElement: ".like-count"
    }, options);
    
    return this.each(function() {
      var $element = $( this ),
        $count = $( options.countElement, $element ),
        url = "http://" + location.host + "/wp-admin/admin-ajax.php",
        id = $element.data( "id" ), // Post's ID
        action = "my_update_likes",
        data = {
          action: action,
          post_id: id
        };
        
        $element.on( "click", function( e ) {
          e.preventDefault();
          $.getJSON( url, data, function( json ) {
            if( json && json.count ) {
              $count.text( json.count ); // Update the count without page refresh
              $(".my-post-like").attr("disabled", true);
            }
          });
        });
    });
  };
})( jQuery );
</script>

<script>
$(document).ready(function() {
  
  $(".animsition").animsition({
  
    inClass               :   'fade-in-down-sm',
    outClass              :   'fade-out-down-sm',
    inDuration            :    1500,
    outDuration           :    800,
    linkElement           :   '.animsition-link',
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    true,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
  });
});
</script>
</body>
</html>
