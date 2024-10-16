var boton = $('.subir');

	$(window).scroll(function(){
		if ($(this).scrollTop() > 200) {
			boton.fadeIn();
			} else {
			boton.fadeOut();
			}
		}); 
			
		boton.click(function(){
			$('html, body').animate({ scrollTop: 0 }, 600);
		});