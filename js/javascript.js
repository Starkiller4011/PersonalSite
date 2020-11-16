$(document).ready(function(){
  $("#nav-menu-button").click(function(){
    $("#main-nav-menu").slideToggle("slow");
  });
	$("#main-nav-menu-overlay").click(function() {
		$("#main-nav-menu").slideUp();
	});
	// $("#main-nav-menu ul li a").click(function() {
	// 	$("#main-nav-menu").slideUp();
	// });
});