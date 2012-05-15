jQuery(window).load(function() {
	jQuery('.greeting').delay(200).fadeIn(1000, function() {
		jQuery('.greeting span').delay(300).fadeIn(800, function() {
			jQuery('.subtext').delay(400).fadeIn(300, function() {
				jQuery('body').delay(600).animate({
					paddingTop: '3%'
				}, 300, function() {
					jQuery('.loader').delay(300).fadeIn(1000, function() {
						jQuery('.loader').delay(1000).fadeOut(500, function() {
							jQuery('.contact').fadeIn(500, function() {
								jQuery('.twitter').fadeIn(500, function() {
									jQuery('.content').delay(400).fadeIn(500);
								});
							});
						});
					}); 
				});
			});
		});
	});
});