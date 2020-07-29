$(document).ready(function(){
	$('.col-img').click(function(){
		$('.dash-side-nav').toggleClass("nav-show");
	});
	$('.collapse').collapse();
	// ============================
	$('.col-toggle-2').click(function(){
		$('.card-1').hide();
		$('.card-3').hide();
		$('.card-2').show();
	});

	// ============================
	$('.col-toggle-3').click(function(){
		$('.card-1').hide();
		$('.card-2').hide();
		$('.card-3').show();
	});

	// ============================
	$('.col-toggle-1').click(function(){
		$('.card-2').hide();
		$('.card-3').hide();
		$('.card-1').show();
	});

	// ===========================
});