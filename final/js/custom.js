

// Carousel
$(document).ready(function(){
		var speed=5000;
		var run = setInterval('rotate()', speed);

		var item_width = $('.carousel li').outerWidth();
		var left_value = item_width * (-1);

		$('.carousel li:first').before($('.carousel li:last'));
		$('.carousel ul').css({'left':left_value});

		$('#left').click(function(){
			var left_indent = parseInt($('.carousel ul').css('left')) + item_width;
			$('.carousel ul').animate({'left':left_indent},150,function(){
				  $('.carousel li:first').before($('.carousel li:last'));           
          $('.carousel ul').css({'left' : left_value});
      });
      return false;
		}); 

		$('#right').click(function(){
			var left_indent = parseInt($('.carousel ul').css('left')) + item_width;
			$('.carousel ul').animate({'left':left_indent},150,function(){
				$('.carousel li:last').after($('.carousel li:first'));        
        $('.carousel ul').css({'left' : left_value});
      });
      return false;
		})

		// if mouse hover, pause the auto rotation, otherwise rotate it
    $('.carousel').hover(
        
        function() {
            clearInterval(run);
        }, 
        function() {
            run = setInterval('rotate()', speed);    
        }
    ); 

    // toggle button
    window.scrollTo(0, 1);
	$('#menu-toggle').click(function (e) {
		// console.log("I'm here")
		$('.nav').toggleClass('hide');
		e.preventDefault();
    });

});

function rotate() {
    $('.gallery').hover();
}

// 

