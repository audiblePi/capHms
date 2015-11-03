(function($) {
	$(document).ready(function() {
		"use strict";
	
		// Litebox
		$('.litebox').tosrus({
			buttons: 'inline',
			pagination	: {
			add			: true,
			type		: 'thumbnails'
			}
		});
						
		// Parallax effect
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 0,
			responsive:true
		});
		
		// OWL Carousels
		$('.carousel').owlCarousel({
			loop:true,
	    	margin:15,
			autoplay:true,
			controls:true,
			navigation : true,
	    	responsiveClass:true,
	    	responsive:{
	       		0:{
		            items:1,
		            nav:false
	        	},
	        	767:{
		            items:2,
		            nav:false
	        	},
	        	959:{
		            items:3,
		            nav:false
	        	},
				1024:{
		            items:3,
		            nav:false
		        }
		    }
		});
				
		// Top Map		
		$('.top-bar .map').click(function() {
			$('.map-container').addClass("show");
		});
		
		$('.map-container .close-btn').click(function() {
			$('.map-container').removeClass("show");
		});
		
		// Page transition
		$('.transition').on('click', function(e) {
			$('.transition-overlay').toggleClass("transition-overlay-show");
		});
			
		// Transition delay
		$('.transition').click(function (e) {
			e.preventDefault();                  
			var goTo = this.getAttribute("href"); 
			 
			setTimeout(function(){
				window.location = goTo;
	    	},1000);       
		});

		//Masonry Portfolio
		$(function(){
	   		var $container = $('.home-gallery ul.gallery ');
	     	$container.imagesLoaded( function(){
	        	$container.masonry({
	           		itemSelector : '.home-gallery ul.gallery li'
	         	});
	       	});
	     });
		
		// Isotope works filter
		var $container = $('.home-gallery ul.gallery');
		$container.isotope({
			filter: ':nth-child(-n+8)',
			layoutMode: 'fitRows'
		});

		$('.filter li a').click(function(){
			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				layoutMode: 'fitRows'
			});
			return false;
		}); 
	}); // end document ready

	// Wow animations
	wow = new WOW({
		animateClass: 'animated',
		offset:       150,
		mobile:       false,       
      	live:         true   
	});
	wow.init();
})(jQuery);