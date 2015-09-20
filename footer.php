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
            <?php printf( __( '%1$s %2$s', 'anthonyjones' ), 'Source code:', '<a href="https://github.com/tony-jones/anthonyjones"><i class="fa fa-github"></i> GitHub</a>' ); ?>
          </div>
          <div class="left location hide-on-med-and-up">
            <?php printf( __( '%1$s %2$s', 'anthonyjones' ), '', '<a href="https://github.com/tony-jones/anthonyjones"><i class="github-icon fa fa-github"></i></a>' ); ?>
          </div>
          <div class="right">
            <div class="waves-effect waves-black top-article">
              <a href="#back-to-top">TOP <i class="fa fa-caret-square-o-up"></i></a>
            </div>
            <div class="waves-effect waves-light next-article">
              <button id="articles-modal" rel="next" role="button" href="#modal3" class="articles modal-trigger waves-effect waves-light btn">Articles</button>
              <!--  <a rel="next" class="modal-trigger" href="#modal3">Articles <i class="mdi-navigation-arrow-forward"></i></a> --></div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Recommended Articles Footer -->
  <div id="modal3" class="modal bottom-sheet">
    <div class="modal-content">
      <a href="#" title="close-modal" class="waves-effect close-arrow close-x close-button">
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
<script type="text/javascript">
jQuery(document).ready(function ($) {
  var disqus_shortname = 'anthonyjones'; // required: replace example with your forum shortname
  var disqus_div = $("#disqus_thread");
  if (disqus_div.size() > 0 ) {
    var ds_loaded = false,
    top = disqus_div.offset().top,
    disqus_data = disqus_div.data(),
    check = function() {
      if ( !ds_loaded && $(window).scrollTop() + $(window).height() > top ) {
        ds_loaded = true;
        for (var key in disqus_data) {
          if (key.substr(0,6) == 'disqus') {
            window['disqus_' + key.replace('disqus','').toLowerCase()] = disqus_data[key];
          }
        }
        // s.async = true;
        var dsq = document.createElement('script'); 
        dsq.type = 'text/javascript';
        dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
      }
    };
    $(window).scroll(check);
    check();
  }
});
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
              $('.my-post-like').attr("disabled", true);
              $('.my-post-like').html('<i class="fa fa-thumbs-o-up"></i> Liked <span class="like-count"></span>');
              $('.fa-thumbs-o-up').addClass('teal-text');
              $('.badges.inverse a.my-post-like').css('border', '2px solid #099DB0');
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
