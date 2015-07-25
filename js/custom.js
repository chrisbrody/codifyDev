
// Accordion Toggle
	var iconOpen = 'icon-minus',
        iconClose = 'icon-plus';

    $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function (e) {
        var $target = $(e.target)
          $target.siblings('.accordion-heading')
          .find('em').toggleClass(iconOpen + ' ' + iconClose);
          if(e.type == 'show')
              $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
          if(e.type == 'hide')
              $(this).find('.accordion-toggle').not($target).removeClass('active');
    });
	  

		
// Tooltip
	$('.social_buttons, .client').tooltip({
		selector: "a[data-toggle=tooltip]"
	})
	
	$('.social_buttons, .client').tooltip()

// Hover and Carousel
	$('.owl-carousel > .item ').each( function() { $(this).hoverdir(); } );
		$("#owl-demo").owlCarousel({
		items : 5,
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		stopOnHover : true,
		lazyLoad : true,
		transitionStyle:"fade",
		navigation : true,
		pagination : false,
	});

// tooltip demo
	$("[data-toggle=tooltip]").tooltip();

// popover demo
	$("[data-toggle=popover]").popover()



$(window).resize(function() {
  if( $(window).width() <= 768 ) {
  	$('.totalcost ul.nav').removeClass('nav-justified');
  }
});

$(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  >= 700) {
        // do something
        $('.social').css({ 'position':'fixed', 'top':'5em' });
    } else if (height < 699) {
    	$('.social').css({ 'position':'absolute', 'top':'760px' });
    }
});

// Find URL and add active to li tag
function getUrl() {
	var url =  window.location.href;

	if ( url.indexOf('index') > -1 ) {
		
		$('a[href="index.php"]').parent().addClass('active');

	} else if ( url.indexOf('course') > -1 ) {
		
		$('a[href="thecourse.php"]').parent().addClass('active');

	}else if ( url.indexOf('success') > -1 ) {
		
		$('a[href="success.php"]').parent().addClass('active');

	} else if ( url.indexOf('tuition') > -1 ) {
		
		$('a[href="tuition.php"]').parent().addClass('active');

	} else if ( url.indexOf('apply') > -1 ) {
		
		$('a[href="apply.php"]').parent().addClass('active');

	} else if ( url.indexOf('faq') > -1 ) {
		
		$('a[href="faq.php"]').parent().addClass('active');

	} else if ( url.indexOf('contact') > -1 ) {
		
		$('a[href="contact.php"]').parent().addClass('active');

	}	
}
getUrl();

// 
function testHeight() {
	var x = $(window).height()
	var url = window.location.href;

	if ( x > 667 && url.indexOf('tuition') > -1 ) {
		$('.copyrights').animate({'bottom':'0'});
	}
}
testHeight();

$(document).ready(function() {	
 		setTimeout(function(){
	        $('body').addClass('loaded');
	    }, 1500); 
});