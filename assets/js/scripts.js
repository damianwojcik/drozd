jQuery(document).ready(function($){

	var $body = $('body'),
		$wind = $(window),
		windW = $wind.width(),
		windH = $wind.height();

	owl_init();
	scroll_based_animations();
	mobile_menu();


	//add placeholder to ninja form textarea
	$(document).find('#ninja_forms_field_7').attr('placeholder', 'Treść wiadomości');


	//justifiedGallery
	$('.image-container').justifiedGallery({
    rowHeight : 170,
    margins : 10,
		lastRow : 'nojustify'
	});


	//adds heading to header sub-menu
	$( ".header-wrap .sub-menu" ).prepend( "<h3>Poradnie</h3>" );


	//owl carousel
	function owl_init(){
		$('.owl-carousel').owlCarousel({

			items: 1,
		    loop: true,
		    autoplay: true,
		    autoplayTimeout: 4000,
		    autoplayHoverPause: true,
		    nav: true

		});
	}


	function scroll_based_animations(){

		var $elements = $('.animation-element'),
		$window = $(window);

		function check_if_in_view(){

			var window_height = $window.height(),
			window_top_pos = $window.scrollTop(),
			window_bottom_pos = (window_top_pos + window_height);

			$.each($elements, function(){

				var $element = $(this),
				element_height = $element.outerHeight(),
				element_top_pos = $element.offset().top,
				element_bottom_pos = (element_top_pos + element_height);

				//check to see if this current container is within viewport
				if ((element_top_pos <= window_bottom_pos) ){
					$element.addClass('in-view');
				} else {
					$element.removeClass('in-view');
				}

			});

		}

		$window.on('scroll resize', check_if_in_view);
		$window.trigger('scroll');

	}


	function mobile_menu(){

		var btn = $('#menu-toggle, .sidebar-btn'),
			menu = $('.menu-primary');
			mobile_menu = $('.sidebar-menu #mobile-menu');
			sidebar_menu = $('.sidebar-menu');

		btn.on('click', function(){
			$body.toggleClass('menu-open');
			sidebar_menu.toggleClass('visible');
		});

		mobile_menu.find('li.menu-item-has-children').each(function(){
			$(this).prepend('<span class="nav-more">+</span>');
		});

		var nav_more = $('.nav-more');
		nav_more.on('click', function(){
			$(this).siblings('ul.sub-menu').slideToggle();
		});

	}


});
