jQuery(function($) {
	
	$('.input.error input,.input.error textarea').focus(function() {
		$(this).parent().removeClass('error');
		$(this).parent().find('.error-message').fadeOut();
	})

	$('.input.error div.input-append input').focus(function() {
		$(this).parent().parent().removeClass('error');
		$(this).parent().parent().find('.error-message').fadeOut();
	})

});