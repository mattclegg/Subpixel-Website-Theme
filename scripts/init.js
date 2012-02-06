$(document).ready(function(){

	// Carousel options
	$('#carousel_slider').bxSlider({
		speed: 500,
		auto: true,
		autoHover: true,
		pause: 5000,
		easing: 'swing',
		prevText: '',
		nextText: ''
	});
	
	var slider = $('#carousel_slider').bxSlider({
		controls: false
	});

	$('#carousel_prev').click(function(){
		slider.goToPreviousSlide();
		return false;
	});
	
	$('#carousel_next').click(function(){
		slider.goToNextSlide();
		return false;
	});
	
	// Simple dropdown
	$('li.mainmenu_item').mouseover(function() {

		$('ul',this).show();
		$('a:first',this).addClass('hoverstate');
	
	}); 
	
	$('li.mainmenu_item').mouseout(function() {

		$('ul',this).hide();
		$('a:first',this).removeClass('hoverstate');
		
	});
	
	// Remove styles from some elements
	$('li.mainmenu_item ul li:last-child a').css('border','none');
	$('#home_first_row .column:first-child').css('border-left','none');
	$('#home_first_row .column:last-child').css('border-right','none');
	
	$('#home_first_row .column').css('height',$('#home_first_row').height());
	
	// Delete header input field value on click and change font color
	$('#input_field').click(function() {
	
		$('#input_field').val('');
		$('#input_field').css('color','#666666');
		
	});
	
	// FAQ visibility toggle	
	$('.faq_section ul li').click(function() {
	
		$('p',this).toggle();
		
	});

	// Datepicker element for the blog
	$('#datepicker').datepicker();

	$('#datepicker_input').datepicker();
	
});