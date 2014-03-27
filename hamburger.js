// Open the menu
$(function(){
	$('#hamburger').hover(function(){
		$('#nav').slideToggle();
	});

	// Close the menu

	$('#contentLayer').click(function(){

	});

	// set the width of primary content container
	var contentWidth = $('#content').width();

	// set the content with the width that it has originally
	$('#content').css('width' , contentWidth)

	// disable all scrolling on mobile devices while menu is shown
	$('#container').bind('touchmove' , function(e){e.preventDefault()})

	// set margin for the whole container with a jquery UI animation
	$('#container').animate({'marginLeft': ['70%' , 'easeOutExpo']}, {
		duration: 700
	});

	// close the menu
	$('content').click(function(){
		$('#container').unbind('touchmove');
		$('#container').animate({'marginLeft': ['0', 'easeOutExpo']}, {
			duration: 700,
			complete: function(){
				$('#content').css('width', 'auto');
				$('#contentLayer').css('display', 'none');
			}
		})
	})
});