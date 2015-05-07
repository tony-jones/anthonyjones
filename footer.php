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
      <a href="#" class="waves-effect close-arrow close-x">
        <i class="mdi-navigation-close"></i>
      </a>
      <h5 class="footer-title">Recommended Articles</h5>
       <ul class="collection">
        <div class="row">
          <div class="col s12 m6 l6">
            <div class="recommended">
              <li class="collection-item avatar">
                <img src="http://lorempixel.com/300/300/technics/" alt="" class="circle">
                <span class="title grey-text">Good Ideas Are Not Enough</span>
                <p>Every year around this time, the town I lived in is decorated throughout 
                  with lots of gorgeous Christmas illuminations.
                </p>
                <a href="#!" class="secondary-content"><span class="category badge hide-on-med-and-down">accessibility</span></a>
              </li>
            </div>
          </div>
          <div class="col s12 m6 l6">
            <div class="recommended">
              <li class="collection-item avatar">
                <img src="http://lorempixel.com/300/300/food/" alt="" class="circle">
                <span class="title grey-text">The Future of UI and the Dream of the ‘90s</span>
                <p>The people living around the Elementary School I attended would work together 
                   I lived in is decorated throughout.
                </p>
                <a href="#!" class="secondary-content"><span class="category badge hide-on-med-and-down">design</span></a>
              </li>
            </div>
          </div>
          <div class="col s12 m6 l6">
            <div class="recommended">
              <li class="collection-item avatar">
                <img src="http://lorempixel.com/300/300/city/" alt="" class="circle">
                <span class="title grey-text">How to Improve Your Workflow</span>
                <p>The people living around the Elementary School I attended would work together 
                   I lived in is decorated throughout with lots.
                </p>
                <a href="#!" class="secondary-content"><span class="category badge hide-on-med-and-down">development</span></a>
              </li>
            </div>
          </div>
          <div class="col s12 m6 l6">
            <div class="recommended">
              <li class="collection-item avatar">
                <img src="http://lorempixel.com/300/300/transport/" alt="" class="circle">
                <span class="title grey-text">UI vs UX Design Tools</span>
                <p>The people living around the Elementary School I attended would work together
                decorated throughout with lots. The Future of UI
                </p>
                <a href="#!" class="secondary-content"><span class="category badge hide-on-med-and-down">design</span></a>
              </li>
            </div>
          </div>
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
</body>
</html>
