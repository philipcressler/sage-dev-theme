/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        var myNavBar = {
            flagAdd: true,
            elements: [],
            init: function (elements) {
                this.elements = elements;
            },
            add : function() {
                if(this.flagAdd) {
                    for(var i=0; i < this.elements.length; i++) {
                        document.getElementById(this.elements[i]).className += " fixed-theme";
                    }
                    $('#menu-cta').addClass('btn--secondary');
                    $('#header').addClass('navbar-fixed-top');
                    $('#brand img').attr('src', templateUrl + '/dist/images/pp-magenta-logo.png');
                    this.flagAdd = false;
                }
            },
            remove: function() {
                for(var i=0; i < this.elements.length; i++) {
                    document.getElementById(this.elements[i]).className =
                            document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
                }
                $('#menu-cta').removeClass('btn--secondary');
                $('#header').removeClass('navbar-fixed-top');
                $('#brand img').attr('src', templateUrl + '/dist/images/power-post-logo-small-white.png');
                this.flagAdd = true;
            }
        };

        /**
         * Init the object. Pass the object the array of elements
         * that we want to change when the scroll goes down
         */
        myNavBar.init(  [
            "header",
            "header-container",
            "brand"
        ]);

        /**
         * Function that manage the direction
         * of the scroll
         */
        function offSetManager(){

            var yOffset = 0;
            var currYOffSet = window.pageYOffset;

            if(yOffset + 300 < currYOffSet) {
                myNavBar.add();
            }
            else if(currYOffSet === yOffset){
                myNavBar.remove();
            }

        }

        /**
         * bind to the document scroll detection
         */
        window.onscroll = function(e) {
            offSetManager();
        };

        /**
         * We have to do a first detectation of offset because the page
         * could be load with scroll down set.
         */
        offSetManager();

        
        $.fn.isValid = function(){
            if(this.hasClass('nice-select')) {
              var select = this.siblings('select');
              return select[0].checkValidity();
            } else {
              return this[0].checkValidity();
            }
          };

          $('form').focusout( function(e) {
            var elem = e.target;
            
            if($( elem ).isValid()) {
              $( '#' + $( elem ).attr('id') + ' ~ .validation').addClass('valid');
              $( '#' + $( elem ).attr('id') + ' ~ .validation').removeClass('invalid');
            } else {
              $( '#' + $( elem ).attr('id') + ' ~ .validation').addClass('invalid');
              $( '#' + $( elem ).attr('id') + ' ~ .validation').removeClass('valid');
            }
            if( $( elem ).val() === "") {
              $( '#' + $( elem ).attr('id') + ' ~ .validation').removeClass('invalid');
              $( '#' + $( elem ).attr('id') + ' ~ .validation').removeClass('valid');
              $( 'label' ).removeClass('hover-active');
            }
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
        var h;
        var t;
        if($(window).width() < 768) {
          $('.home-hero__background img').attr('src', templateUrl + '/dist/images/mobile-hero.png');
          h = $('.home-hero__background img').height();
          t = $('.home-hero__xs-container').height();
          $('.home-hero > .row').css('height', t + h);
        } else if($(window).width() < 992 ) {
          $('.home-hero__background img').attr('src', templateUrl + '/dist/images/tablet-hero.png'); 
          h = $('.home-hero__background img').height();
          t = $('.home-hero__xs-container').height();
          $('.home-hero > .row').css('height', h);
        } else {
          $('.home-hero__background img').attr('src', templateUrl + '/dist/images/desktop-hero.png');
          $('.row-eq').matchHeight();
        }

        $(window).resize(function() {
          if($(window).width() < 768) {
            $('.home-hero__background img').attr('src', templateUrl + '/dist/images/mobile-hero.png');
            h = $('.home-hero__background img').height();
            t = $('.home-hero__xs-container').height();
            $('.home-hero > .row').css('height', t + h);          
          } else if($(window).width() < 992 ) {
            $('.home-hero__background img').attr('src', templateUrl + '/dist/images/tablet-hero.png'); 
            h = $('.home-hero__background img').height();
            $('.home-hero > .row').css('height', h);
          } else {
            $('.home-hero__background img').attr('src', templateUrl + '/dist/images/desktop-hero.png');
            $('.row-eq').matchHeight();
          }
        });

        $('.home-testimonial__card').matchHeight();
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'software': {
      init: function() {
        // JavaScript to be fired on the about us page
        $('#pricing-unit').affix({ offset: { 
          top: $('.software-business').offset().top - 100 ,
          bottom: $('.home-testimonial').outerHeight(true) + $('footer').outerHeight(true) + $('.software-links').outerHeight(true)
          }
         });

        $('.home-testimonial__card').matchHeight();
      }
    },

    'pricing': {
      init: function() {
        $('#pricing-toggle a').click(function(e) {
          e.preventDefault();
          $(this).tab('show');
        });
        $('.row-eq').matchHeight();
        $('.background-eq').matchHeight();

      }
    },

    'studio': {
      init: function() {
        $('.row-eq').matchHeight();  
        
        if($(window).width() < 768) {
          $('.studio-two__image img').attr('src', templateUrl + '/dist/images/studio-two-image-mobile.png');
        } else {
          $('.studio-two__image img').attr('src', templateUrl + '/dist/images/studio-two-image-full.png');
        }

        $(window).resize(function() {
          if($(window).width() < 768) {
            $('.studio-two__image img').attr('src', templateUrl + '/dist/images/studio-two-image-mobile.png');      
          } else {
            $('.studio-two__image img').attr('src', templateUrl + '/dist/images/studio-two-image-full.png');
          }
        });
        $('.dont').slick({

        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
