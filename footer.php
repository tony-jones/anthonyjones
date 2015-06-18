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
            <?php printf( __( '%1$s %2$s', 'anthonyjones' ), 'Source code:', '<a href="https://github.com/tony-jones/anthonyjones" class="orange-text"><i class="fa fa-github"></i> GitHub</a>' ); ?>
          </div>
          <div class="left location hide-on-med-and-up">
            <?php printf( __( '%1$s %2$s', 'anthonyjones' ), '', '<a href="https://github.com/tony-jones/anthonyjones" class="orange-text"><i class="github-icon fa fa-github"></i></a>' ); ?>
          </div>
          <div class="right">
            <div class="waves-effect waves-black top-article">
              <a href="#back-to-top">TOP <i class="fa fa-caret-square-o-up"></i></a>
            </div>
            <div class="waves-effect waves-light next-article">
              <a rel="next" href="#modal3" class="articles modal-trigger waves-effect waves-light btn">Articles</a>
              <!--  <a rel="next" class="modal-trigger" href="#modal3">Articles <i class="mdi-navigation-arrow-forward"></i></a> --></div>
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
       <div class="row"> 
         <ul class="collection">
          <?php $recentPosts = new WP_Query(); ?>
          <?php $recentPosts->query('showposts=4'); ?>
          <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
          <div class="no-padding col s12 m6 l6">
            <div class="recommended">
              <a class="recommended-a close-x" href="<?php echo get_permalink(); ?>">
              <li class="footer-articles waves-effect waves-dark collection-item avatar">
                <img src="<?=$url?>" alt="thumbnail image for recommended articles" class="circle responsive-img">
                <span class="title grey-text"><?php the_title(); ?></span>
                <p>
                  <?php get_the_subtitle( $post ); ?>
                </p>
                <span class="footer-categories">
                  <?php
                    foreach((get_the_category()) as $category) {
                      echo $category->cat_name . ' ';
                    }
                  ?>
                </span>
              </li>
              </a>
            </div>
          </div>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
</div><!-- #page -->

<!-- asyncronous load of Typekit font -->
<script>
(function(d) {
  var config = {
    kitId: 'kwr2coa',
    scriptTimeout: 3000
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);
</script>

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
    inDuration            :    1000,
    outDuration           :    700,
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
