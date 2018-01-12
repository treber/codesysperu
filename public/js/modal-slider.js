/*------------------Ventana modal con slider ------------------*/
var cmodal = $('#container-modal');
var slider = $('.gallery-modal');
var next = $('#btn-next');
var previous = $('#btn-prev');
var open = $('.open-modal');
var close = $('.btn-close');

$('.gallery-modal section:last').insertBefore('.gallery-modal section:first');

slider.css('margin-left', '-'+100+'%');

function moverRight(){
	slider.animate({
		marginLeft:'-'+200+'%'} ,700, function(){
			$('.gallery-modal section:first').insertAfter('.gallery-modal section:last');
			slider.css('margin-left', '-'+100+'%');
		});
}

function moverLeft(){
	slider.animate({
		marginLeft: 0 }
		,700, function(){
			$('.gallery-modal section:last').insertBefore('.gallery-modal section:first');
			slider.css('margin-left', '-'+100+'%');
		});
}

next.on('click', function(){
	moverRight();
});

previous.on('click', function(){
	moverLeft();
});


function autoplay(){
	interval = setInterval(function(){
		moverRight();
	}, 3000);
}

autoplay();


open.on('click', function(){
	cmodal.fadeIn(300);
})

close.on('click', function(){
	cmodal.fadeOut(300);
})

/*----------------------------------*/
/*
$(document).ready(function() {

  // only small screens
  if($(window).width() <= 600){
    // show menu on swipe to right
    $(document).on('swiperight', function(e) {
      e.preventDefault();
      $('.gallery-modal').animate({
        left: '0'
      });
    });
    // hide menu on swipe to left
    $(document).on('swipeleft',function(e){
      e.preventDefault();
      $('.gallery-modal').animate({
        left: '-100%'
      });
    });
  }

});*/


var $close = $('#gallery-modal');
var $img_modal = $('.img-modal');

$close
	.on('swipeleft', function(e) {
		e.preventDefault();
		$img_modal.addClass('swipe-gallery');
});