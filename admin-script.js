jQuery(function($){

	$('.appearance_page_upfw-settings h3').prepend('<span class="toggle-button">></span> ');
	$('.appearance_page_upfw-settings h3').click(function(){
		$(this).next().next().toggleClass('visible');
		$(this).find('.toggle-button').toggleClass('visible');
	});

	$('label[for="facebook"').after('<span style="display:block; font-weight:normal">(Required for profile to display)</span>');
})