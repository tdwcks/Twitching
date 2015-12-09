/* ==========================================================================
   Political Twitching
   Designer: Tom Wicks
   ========================================================================== */

$(function(){

	// Responsive Js stuff

	ResponsiveJS.bind('(min-width: 720px)', function() {

	});

	$( ".eye-icon" ).on( "click", function() {
  	$('.map-legend').toggleClass('inactive');
	});

	$( "#about-m" ).on( "click", function() {
		$('nav ul li').removeClass('active');
		$('#about-m').addClass('active');
		$('#about-holder').addClass('active');
		$('#poltical-holder').removeClass('active');
	});



});

