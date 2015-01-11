$(document).ready(function(){
	$('.thumb-image-list a').click(function(){
		$('.thumb-image-list a').removeClass('active');
		$(this).addClass('active');
		$('.main-image').attr('src', $(this).attr('href'));
		
		return false;
	})
});