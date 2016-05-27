jQuery(document).ready(function($) {

	function setBlogItems(){
		jQuery(".items-row .item").equalHeights();
	}

	jQuery(window).load(function(){
		setBlogItems();
	});

	jQuery(window).resize(function(){
		if (jQuery(".is_internet.v_9").length) {
			setBlogItems();
		}
	});

});