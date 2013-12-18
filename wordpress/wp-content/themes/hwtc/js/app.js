/*global jQuery */
/*jshint multistr:true browser:true */
/*!
* FitVids 1.0.3
*
* Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
* Date: Thu Sept 01 18:00:00 2011 -0500
*/


(function( $ ){

  "use strict";

  $.fn.fitVids = function( options ) {
    var settings = {
      customSelector: null
    };

    if(!document.getElementById('fit-vids-style')) {

      var div = document.createElement('div'),
          ref = document.getElementsByTagName('base')[0] || document.getElementsByTagName('script')[0],
          cssStyles = '&shy;<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>';

      div.className = 'fit-vids-style';
      div.id = 'fit-vids-style';
      div.style.display = 'none';
      div.innerHTML = cssStyles;

      ref.parentNode.insertBefore(div,ref);

    }

    if ( options ) {
      $.extend( settings, options );
    }

    return this.each(function(){
      var selectors = [
        "iframe[src*='player.vimeo.com']",
        "iframe[src*='youtube.com']",
        "iframe[src*='youtube-nocookie.com']",
        "iframe[src*='kickstarter.com'][src*='video.html']",
        "object",
        "embed"
      ];

      if (settings.customSelector) {
        selectors.push(settings.customSelector);
      }

      var $allVideos = $(this).find(selectors.join(','));
      $allVideos = $allVideos.not("object object"); // SwfObj conflict patch

      $allVideos.each(function(){
        var $this = $(this);
        if (this.tagName.toLowerCase() === 'embed' && $this.parent('object').length || $this.parent('.fluid-width-video-wrapper').length) { return; }
        var height = ( this.tagName.toLowerCase() === 'object' || ($this.attr('height') && !isNaN(parseInt($this.attr('height'), 10))) ) ? parseInt($this.attr('height'), 10) : $this.height(),
            width = !isNaN(parseInt($this.attr('width'), 10)) ? parseInt($this.attr('width'), 10) : $this.width(),
            aspectRatio = height / width;
        if(!$this.attr('id')){
          var videoID = 'fitvid' + Math.floor(Math.random()*999999);
          $this.attr('id', videoID);
        }
        $this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $this.removeAttr('height').removeAttr('width');
      });
    });
  };
// Works with either jQuery or Zepto
})( window.jQuery || window.Zepto );



/*global jQuery */
/*!
* FitText.js 1.1
*
* Copyright 2011, Dave Rupert http://daverupert.com
* Released under the WTFPL license
* http://sam.zoy.org/wtfpl/
*
* Date: Thu May 05 14:23:00 2011 -0600
*/

(function( $ ){

  $.fn.fitText = function( kompressor, options ) {

    // Setup options
    var compressor = kompressor || 1,
        settings = $.extend({
          'minFontSize' : Number.NEGATIVE_INFINITY,
          'maxFontSize' : Number.POSITIVE_INFINITY
        }, options);

    return this.each(function(){

      // Store the object
      var $this = $(this);

      // Resizer() resizes items based on the object width divided by the compressor * 10
      var resizer = function () {
        $this.css('font-size', Math.max(Math.min($this.width() / (compressor*10), parseFloat(settings.maxFontSize)), parseFloat(settings.minFontSize)));
      };

      // Call once to set.
      resizer();

      // Call on resize. Opera debounces their resize by default.
      $(window).on('resize.fittext orientationchange.fittext', resizer);

    });

  };

})( jQuery );



/*
* Fade and parallax for header.
*/
var isMobile;

// Identify if visitor on mobile with lame sniffing to remove parallaxing title
if( navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPod/i) ||
    navigator.userAgent.match(/iPad/i) ||
    navigator.userAgent.match(/BlackBerry/)
){
  isMobile = true;
}

jQuery(document).ready(function($) {

  // Global vars
  var $artHeaderInner = $('.bannertext');
  var $artHeader = $('.bannerimage');
  var $nav = $('.nav');
  var windowScroll;


	// Custom Codes
    $(".columns-1").fitVids();
    $(".front-headline").fitText(2);
	$(window).resize(function() {
		$(".content-img").each(function(){
			var img_height = $(this).find('img').height();	
			var paddingb = $(this).css('padding-bottom');
			var margin= parseInt(img_height) + parseInt(paddingb);
			var next =	$(this).next().css('margin-top',margin+'px');		
		});
	});
    $(".content-img").each(function(){
		var img_height = $(this).find('img').height();	
		var paddingb = $(this).css('padding-bottom');
		var margin= parseInt(img_height) + parseInt(paddingb);
		var next =	$(this).next().css('margin-top',margin+'px');

	});
    
	
	
  // Identify if visitor has a large enough viewport for parallaxing title
  function isLargeViewport() {
    if($nav.css('position') === "relative") {
      return false;
    } else {
      return true;
    }
  }

  // If large viewport and not mobile, parallax the title
  if(!isMobile) {
    $(window).scroll(function() {
      if(isLargeViewport()) {
        slidingTitle();
      }
    });
  }

  // Window gets large enough, need to recalc all parallaxing title values
  $(window).resize(function() {
    if(isLargeViewport()) {
      slidingTitle();
    }
  });

	// Onclick action to open/close offcanvas menu
	
	
	$('ul li a').on('click',function(e){
		if($(this).attr('href')=='#contact') {
			e.preventDefault();
			$('html,body').animate({scrollTop: $('footer').offset().top}, 500);
		}
	});
	
	$('#mobile-nav-button a').on('click',function(e){
		$('body').toggleClass('open-right');
		e.preventDefault();
	});

  // Functional parallaxing calculations
  function slidingTitle() {
    //Get scroll position of window
    windowScroll = $(this).scrollTop();

    //Slow scroll of .bannertext scroll and fade it out
    $artHeaderInner.css({
      'margin-top' : -(windowScroll/3)+"px",
      'opacity' : 1-(windowScroll/250)
    });

    //Slowly parallax the background of .bannerimage
    $artHeader.css({
      'background-position' : 'center ' + (-windowScroll/6)+"px"
    });

    //Fade the .nav out
    $nav.css({
      'opacity' : 1-(windowScroll/100)
    });
	if($nav.css('opacity') <= 0) {
		$('header').addClass('active-header');
		$('.nav').css('display','none');
		$('.second-nav').fadeIn('slow');
	} else {
		$('header').removeClass('active-header');
		$('.second-nav').css('display','none');
		$('.nav').css('display','block');
	}
  }
});

var map;
var panorama;
var busStop = new google.maps.LatLng(43.652267, -79.376321);

function initialize() {

  // Set up the map
  var mapOptions = {
    center: busStop,
    zoom: 18,
    streetViewControl: false
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  var busMarker = new google.maps.Marker({
      position: busStop,
      map: map,
      icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_icon&chld=bus|FFFF00',
      title: 'Hospitality Workers Training Centre'
  });

  // We get the map's default panorama and set up some defaults.
  // Note that we don't yet set it visible.
  panorama = map.getStreetView();
  panorama.setPosition(busStop);
  panorama.setPov(/** @type {google.maps.StreetViewPov} */({
    heading: 265,
    pitch: 0
  }));
}

function toggleStreetView() {
  var toggle = panorama.getVisible();
  if (toggle == false) {
    panorama.setVisible(true);
  } else {
    panorama.setVisible(false);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);
