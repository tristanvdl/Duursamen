function effects(id,pixels,animation){
$(window).scroll(function() {
		$(id).each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+pixels) {
				$(this).addClass(animation);
			}
		});
		console.log('scroll');
	});

}


/* -------- Home Pagina --------- */
effects('#presentatie',500, 'slideRight');
effects('#onderzoek',500, 'slideLeft');


/* -------- Over Ons Pagina ------ */
effects('#tekst',500, 'slideUp');
effects('#foto2',450, 'slideUp');
effects('#foto',400, 'bigEntrance');
effects('#tekst2',300, 'bigEntrance');




    
    




