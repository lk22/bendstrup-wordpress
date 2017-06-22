<script>

$(function() {

	// menu buttons
	var $mobile_menu_buttons = [
		$('.menu-icon'),
		$('.close-menu-button')
	];

	// classes to toggle
	var classes = ['hidden', 'shown'];

	// mobile menu container
	var $mobile_menu = $('.mobile-menu-container');

	/**
	 * toggle the mobile menu on mobile
	 * @param  {[type]} ) {				$mobile_menu.toggleClass(				    classes[0],				    classes[1]				);			} [description]
	 * @return {[type]}   [description]
	 */
	$mobile_menu_buttons[0].click(function() {
		$mobile_menu.toggleClass(
		    classes[0],
		    classes[1]
		);
	});

	/**
	 * toggle small device menu on small devices
	 * @param  {[type]} ) {				$mobile_menu.toggleClass(				    classes[0],				 	classes[1]				);			} [description]
	 * @return {[type]}   [description]
	 */
	$mobile_menu_buttons[1].click(function() {
		$mobile_menu.toggleClass(
		    classes[0],
		 	classes[1]
		);
	});
});

$(function() {
    var page_content = $('#page-content');
    page_content.fadeIn(500);
});

/**
 * iamges container
 * @param  {[type]} ) {			var      images [description]
 * @return {[type]}   [description]
 */
$(function() {

	var $image_container = $('.pictures-section');

	// enable lightbox on images
	var images = $('[data-toggle="lightbox"]');
	images.click(function(e) {
		e.preventDefault();
		$(this).ekkoLightbox({
			alwaysShowClose : true,
			onNavigate: function(direction, itemIndex) {
				console.log('Navigating '+direction+'. Current item: '+itemIndex);
			}
		});
	});
});


/**
 * Enable bootstrap tooltips
 */
$(function() {

	$('[data-toggle="tooltip"]').tooltip({ html: true });

});

</script>