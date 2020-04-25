jQuery(document).ready(function () {
	jQuery('.events .event-content').each(function () {
		var h = 0;
		if (jQuery(this).outerHeight() > h)
			h = jQuery(this).outerHeight();
		jQuery('.events .event-img').css('height', h + 'px');
	});
	
	jQuery('.profil-h').each(function () {
		var h = 0;
		if (jQuery(this).outerHeight() > h)
			h = jQuery(this).outerHeight();
		jQuery('.profil-h.relative').css('height', h + 'px');
	});
	
	jQuery('.dropdown > a').attr("data-toggle","dropdown");
	
	
	
});
