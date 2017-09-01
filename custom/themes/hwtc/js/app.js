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
	
	//$(window).resize(function() {
//		$(".content-img").each(function(){
//			var img_height = $(this).find('img').height();	
//			var paddingb = $(this).css('padding-bottom');
//			var margin= parseInt(img_height) + parseInt(paddingb);
//			var next =	$(this).next().css('margin-top',margin+'px');		
//		});
//		
//	});
//    $(".content-img").each(function(){
//		var img_height = $(this).find('img').height();	
//		var paddingb = $(this).css('padding-bottom');
//		var margin= parseInt(img_height) + parseInt(paddingb);
//		var next =	$(this).next().css('margin-top',margin+'px');
//	});
    
	
	
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
      var st = $(this).scrollTop();
      if (st > 50) {
          $('#logo-tab').addClass('shrink-logo');
          // console.log('heyyy');
      } else {
          $('#logo-tab').removeClass('shrink-logo');
          // console.log('hidden');
      }
    });
  }else {
		var b_img_height=$('.banner img').height();
		$('.bannertext').css('padding-top',b_img_height+'px');
			$(window).resize(function() {
				var b_img_height=$('.banner img').height();
				$('.bannertext').css('padding-top',b_img_height+'px');
			});

  }

  // Window gets large enough, need to recalc all parallaxing title values
  $(window).resize(function() {
    if(isLargeViewport() && (!isMobile)) {
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
	
	// $('#mobile-nav-button a').on('click',function(e){
		// $('body').toggleClass('open-right');
		// e.preventDefault();
	// });

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
	// if($nav.css('opacity') <= 0) {
		// $('header').addClass('active-header');
		// $('.nav').css('display','none');
		// $('.second-nav').fadeIn('slow');
	// } else {
		// $('header').removeClass('active-header');
		// $('.second-nav').css('display','none');
		// $('.nav').css('display','block');
	// }
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

jQuery(document).ready(function($){

	jQuery('.course-accordion h3 a').hover(function() {
		jQuery(this).stop().animate({
			paddingLeft: '0.5em',
			opacity: 1
		}, 250,'easeOutQuad');
	},function() {
		jQuery(this).stop().animate({
			paddingLeft: '0',
			opacity: 0.6
		}, 250,'easeOutQuad');
	});	
	jQuery('.course-accordion h3 a').click(function($) {
		var content = jQuery(this).attr('id');
		
		var display=jQuery('.'+content).css('display');
		jQuery('.course-accordion .course-accodion-content').each(function(){
			//jQuery(this).fadeOut();
		});
		if(display=='none') {
			jQuery('.'+content).fadeIn();
		}else {
			jQuery('.'+content).fadeOut();
		}
		
		return false;
	});

	// Registration Form
	if ($('#agree_check').length) {
		// Agree - Terms and Conditions
		var agree_check = document.getElementById('agree_check');
		var reveal_agree = document.getElementById('form_agree_block');
		var showForm = function(){
		   	if(agree_check.checked) {
		     reveal_agree.style['display'] = 'block';
		   	} else {
		     reveal_agree.style['display'] = 'none';
		   	} 
		}
		agree_check.onclick = showForm;
		showForm();

		// Age Check
		var age_check = document.getElementById('00N0a00000C0TSS');
		var reveal_age = document.getElementById('date-check-block');
		var age_note = document.getElementById('reveal-age-note');
		var showDateDiv = function(){
		   	age_note.style['display'] = 'none';
		   	reveal_age.style['display'] = 'none';
		}
		showDateDiv();
		$("#date-check").change(function(){
			thedate = $(this).val();
			console.log(thedate);
			dob = new Date(thedate);
			var today = new Date();
			var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
			if (age >= 18) {
				reveal_age.style['display'] = 'block';
				age_note.style['display'] = 'none';
				age_check.value = thedate;
			} else {
				reveal_age.style['display'] = 'none';
				age_note.style['display'] = 'block';
			}
		});

		// Are you eligible to work in Canada?
		var checkbox = document.getElementById('00N0a00000C0TSX-1');
		var checkbox_n = document.getElementById('00N0a00000C0TSX-2');
		var reveal_div = document.getElementById('form-reveal');
		var reveal_note = document.getElementById('reveal-note');
		var real_check = document.getElementById('00N0a00000C0TSX');
		var showHiddenDiv = function(){
		   	if(checkbox.checked) {
		     reveal_div.style['display'] = 'block';
		     reveal_note.style['display'] = 'none';
		     real_check.checked = true;
		   	} else {
		     reveal_div.style['display'] = 'none';
		     reveal_note.style['display'] = 'block';
		     real_check.checked = false;
		   	} 
		}
		checkbox.onclick = showHiddenDiv;
		checkbox_n.onclick = showHiddenDiv;
		showHiddenDiv();

		// Citizenship Status
		var status_box = document.getElementById('status-other-box');
		var status = function(){
			status_box.style['display'] = 'none';
		}
		status();
		$("#00N0a00000C0TSr").change(function(){
			if($(this).val() == "Other") {
				status_box.style['display'] = 'block';
			} else {
				status_box.style['display'] = 'none';
			}
		});

		// What is your employment status?
		var ec_box = document.getElementById('employment-status-check');
		var ec_note = document.getElementById('reveal-note-ec');
		var ec = function(){
			ec_note.style['display'] = 'none';
			// ec_box.style['display'] = 'none';
		}
		ec();
		$("#00N0a00000C0TT6").change(function(){
			if($(this).val() == "Employed Full-time" || $(this).val() == "Student") {
				ec_note.style['display'] = 'block';
				ec_box.style['display'] = 'none';
			} else {
				ec_note.style['display'] = 'none';
				ec_box.style['display'] = 'block';
			}
		});

		// Are you able to be on your feet and work for up to 8 hours?
		var phys1_check = document.getElementById('00N0a00000C0TTB-2');
		var phys1_check_y = document.getElementById('00N0a00000C0TTB-1');
		var phys1_check_ns = document.getElementById('00N0a00000C0TTB-3');
		var phys1_box = document.getElementById('phys_one_block');
		var phys1 = function(){
		   	if(phys1_check.checked) {
		    	phys1_box.style['display'] = 'block';
		    	$('#00N0a00000C0TTB').val('No').trigger('change');
		    	$("#00N0a00000C0TTG").prop('required',true);
		   	} else if (phys1_check_y.checked) {
		   		$("#00N0a00000C0TTG").prop('required',false);
		     	phys1_box.style['display'] = 'none';
		     	$('#00N0a00000C0TTB').val('Yes').trigger('change');
		   	} else if (phys1_check_ns.checked) {
		   		$("#00N0a00000C0TTG").prop('required',false);
		   		phys1_box.style['display'] = 'none';
		   		$('#00N0a00000C0TTB').val('Not sure').trigger('change');
		   	} else {
		   		phys1_box.style['display'] = 'none';
		   	}
		}
		phys1_check.onclick = phys1;
		phys1_check_y.onclick = phys1;
		phys1_check_ns.onclick = phys1;
		phys1();

		// Are you comfortable lifting up to 30lbs?
		var phys2_check = document.getElementById('00N0a00000C0TTL-2');
		var phys2_check_y = document.getElementById('00N0a00000C0TTL-1');
		var phys2_check_ns = document.getElementById('00N0a00000C0TTL-3');
		var phys2_box = document.getElementById('phys_two_block');
		var phys2 = function(){
	   		if(phys2_check.checked) {
		   	 	phys2_box.style['display'] = 'block';
		   	 	$('#00N0a00000C0TTL').val('No').trigger('change');
		   	 	$("#00N0a00000C0TTQ").prop('required',true);
	   		} else if (phys2_check_y.checked) {
	   			$("#00N0a00000C0TTQ").prop('required',false);
	   	  		phys2_box.style['display'] = 'none';
	   	  		$('#00N0a00000C0TTL').val('Yes').trigger('change');
	   		} else if (phys2_check_ns.checked) {
	   			$("#00N0a00000C0TTQ").prop('required',false);
	   			phys2_box.style['display'] = 'none';
	   			$('#00N0a00000C0TTL').val('Not sure').trigger('change');
	   		} else {
	   			phys2_box.style['display'] = 'none';
	   		}
		}
		phys2_check.onclick = phys2;
		phys2_check_y.onclick = phys2;
		phys2_check_ns.onclick = phys2;
		phys2();

		// Are you able to bend, reach, push, and twist?
		var phys3_check = document.getElementById('00N0a00000C0TTV-2');
		var phys3_check_y = document.getElementById('00N0a00000C0TTV-1');
		var phys3_check_ns = document.getElementById('00N0a00000C0TTV-3');
		var phys3_box = document.getElementById('phys_three_block');
		var phys3 = function(){
		   	if(phys3_check.checked) {
		   	 	phys3_box.style['display'] = 'block';
		   	 	$('#00N0a00000C0TTV').val('No').trigger('change');
		   	 	$("#00N0a00000C0TTa").prop('required',true);
	   		} else if (phys3_check_y.checked) {
	   			$("#00N0a00000C0TTa").prop('required',false);
	   	  		phys3_box.style['display'] = 'none';
	   	  		$('#00N0a00000C0TTV').val('Yes').trigger('change');
	   		} else if (phys3_check_ns.checked) {
	   			$("#00N0a00000C0TTa").prop('required',false);
	   			phys3_box.style['display'] = 'none';
	   			$('#00N0a00000C0TTV').val('Not sure').trigger('change');
	   		} else {
	   			phys3_box.style['display'] = 'none';
	   		}
		}
		phys3_check.onclick = phys3;
		phys3_check_y.onclick = phys3;
		phys3_check_ns.onclick = phys3;
		phys3();

		// How did you hear about HWTC?
		var hear_box = document.getElementById('hear-other-box');
		var hear = function(){
			hear_box.style['display'] = 'none';
		}
		hear();
		$("#00N0a00000C0TTk").change(function(){
			$arr = $(this).val();
			if($.inArray("Other", $arr) !== -1) {
				hear_box.style['display'] = 'block';
			} else {
				hear_box.style['display'] = 'none';
			}
		});

		// Employment goals
		var goal_box = document.getElementById('goals-other-box');
		var goal = function(){
			goal_box.style['display'] = 'none';
		}
		goal();
		$("#00N0a00000C0TTu").change(function(){
			if($(this).val() == "Other") {
				goal_box.style['display'] = 'block';
			} else {
				goal_box.style['display'] = 'none';
			}
		});

	}
});

/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright Ã‚Â© 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158; 
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});