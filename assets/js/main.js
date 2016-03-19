$(document).ready(function(){
	$('#menuToggle').click(function(event){
		$(this).toggleClass('toggled');
		$('header nav').toggleClass('toggled');
	});
});