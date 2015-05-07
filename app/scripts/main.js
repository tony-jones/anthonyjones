/*!
 *
 *  AnthonyJones.me
 *  Copyright 2015 Anthony. All rights reserved.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *    https://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License
 *
 */

(function($){
  $(function(){

    $('.sidenav_button').sideNav();
    $('.scrollspy').scrollSpy();
    $('.modal-trigger').leanModal();

    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

    skrollr.init({
      smoothScrolling: true,
    });

    // Floating-Fixed table of contents
    if ($('nav').length && $('.tabs-wrapper').length) {
      $('.tabs-wrapper').pushpin({ top: $('.tabs-wrapper').offset().top });
      /* $('.tabs-wrapper').pushpin({ top: $('nav').height() + $('#banner').height() }); */
    }
    else if ($('#banner').length) {
      $('.tabs-wrapper').pushpin({ top: $('#banner').height() + 500 });
    }
    else {
      $('.tabs-wrapper').pushpin({ top: 0 });
    }

    // grab an element
    var myElement = document.querySelector('#banner');
    
    // construct an instance of Headroom, passing the element
    var headroom = new Headroom(myElement, {
      'offset': 400,
      'tolerance': 5,
    });

    headroom.init();
    
    // handle the AJAX request for like button
    $.fn.myPostLikes = function( options ) {
    options = $.extend({
      countElement: '.like-count'
    }, options);
    
    return this.each(function() {
      var $element = $( this ),
        $count = $( options.countElement, $element ),
        url = 'http://" + location.host + "/wp-admin/admin-ajax.php',
        id = $element.data( "id" ), // Post's ID
        action = 'my_update_likes',
        data = {
          action: action,
          post_id: id
        };
        
        $element.on('click', function(e) {
          e.preventDefault();
          $.getJSON( url, data, function(json) {
            if( json && json.count ) {
              $count.text( json.count ); // Update the count without page refresh
              $('.my-post-like').attr('disabled', true);
            }
          });
        });
      });
    };
    if( $('.my-post-like').length ) {
      $('.my-post-like').myPostLikes();
    }
  }); // end of document ready
})(jQuery); // end of jQuery name space

  


