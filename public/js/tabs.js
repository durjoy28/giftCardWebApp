(function ($) { $(document).ready(function() {
$(document).ready(function() {

	//Default Action
	$(".s_tabs .post-list-holder").hide(); //Hide all content
	$("ul.tabset li:first").addClass("active").show(); //Activate first tab
	$(".s_tabs .post-list-holder:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabset li").click(function() {
		$("ul.tabset li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".s_tabs .post-list-holder").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
}); })(jQuery);
