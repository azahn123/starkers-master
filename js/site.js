
	jQuery(document).ready(function($) {

		// Your JavaScript goes here


	// jQuery("#shineTitle").fitText();
	// jQuery("#slide1").fitText();

	// jQuery("#shineTitle").fitText(1.2, { minFontSize: '20px', maxFontSize: '140px' })
	

	

	jQuery(function(){
 var shrinkHeader = 300;
  jQuery(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.header').addClass('shrink');
        }
        else {
            $('.header').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset;
    }
});
	

	});

