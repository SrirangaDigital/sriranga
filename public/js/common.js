$(document).ready(function() {

	$('.nav-toggle').on('click', function(event){

		event.preventDefault();
		$('body').toggleClass('nav-opened');
	});
});