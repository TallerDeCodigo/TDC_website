(function($){

	"use strict";

	$(function(){


		console.log('hello from functions.js');


		/**
		 * Validación de emails
		 */
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};



		/**
		 * Regresa todos los valores de un formulario como un associative array 
		 */
		window.getFormData = function (selector) {
			var result = [],
				data   = $(selector).serializeArray();

			$.map(data, function (attr) {
				result[attr.name] = attr.value;
			});
			return result;
		}

		$('.master_header').addClass('original').clone().insertAfter('.master_header').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

		var scrollIntervalID = setInterval(stickIt, 10);


		function stickIt() {

		  var orgElementPos = $('.original').offset();
		  var orgElementTop = orgElementPos.top;               
		  if ($(window).scrollTop() > (orgElementTop)) {
		    // scrolled past the original position; now only show the cloned, sticky element.

		    // Cloned element should always have same left position and width as original element.     
		    var orgElement = $('.original');
		    var coordsOrgElement = orgElement.offset();
		    var leftOrgElement = coordsOrgElement.left;  
		    var widthOrgElement = orgElement.css('width');
		    $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
		    $('.original').css('visibility','hidden');
		  } else {
		    // not scrolled past the menu; only show the original menu.
		    $('.cloned').hide();
		    $('.original').css('visibility','visible');
		  }
		}

		var scrollToElement = function(el, ms){
		    var speed = (ms) ? ms : 600;
		    $('html,body').animate({
		        scrollTop: $(el).offset().top - 38
		    }, 
		    speed,
		    'easeInBack');
		}

		// specify id of element and optional scroll speed as arguments
		

		$('.anchor-scroll').click( function(){
			var hash = $(this).data('nav');
			scrollToElement(hash, 800);
		});

		$('.menu_trigger').on('click', function(){
			$(this).hide();
			$('.master_header.cloned .main_menu').fadeIn('fast', 'easeInBack');
		});

		$('.close_menu').on('click', function(){
			$('.menu_trigger').show();
			$('.master_header.cloned .main_menu').fadeOut('fast', 'easeInBack');
		});


	});

})(jQuery);
