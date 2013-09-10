// jQuery Quicksand project categories filtering
// Thanks to Sacha Greif - http://www.sachagreif.com/

jQuery(document).ready(function($){
 	// Clone applications to get a second collection
	var $data = $(".portfolio-content").clone();
	
	//NOTE: Only filter on the main portfolio page, not on the subcategory pages
	$('.portfolio-main li').click(function(e) {
		$(".filter li").removeClass("active");	
		// Use the last category class as the category to filter by. This means that multiple categories are not supported (yet)
		var filterClass=$(this).attr('class').split(' ').slice(-1)[0];
		
		if (filterClass == 'all-projects') {
			var $filteredData = $data.find('.project');
		} else {
			var $filteredData = $data.find('.project[data-type=' + filterClass + ']');
		}
		$(".portfolio-content").quicksand($filteredData, {
			duration: 800,
			easing: 'swing',
		},function(){
			 $('.piro_overlay,.pirobox_content').remove();
			 $().piroBox({
				my_speed: 400, //animation speed
				bg_alpha: 0.3, //background opacity
				slideShow : true, // true == slideshow on, false == slideshow off
				slideSpeed : 4, //slideshow duration in seconds(3 to 6 Recommended)
				close_all : '.piro_close,.piro_overlay'// add class .piro_overlay(with comma)if you want overlay click close piroBox
	
			});

		});		
		$(this).addClass("active"); 			
		return false;
	});
});

