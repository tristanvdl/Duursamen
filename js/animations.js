function effects(id,pixels,animation){
$(window).scroll(function() {
		$(id).each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+pixels) {
				$(this).addClass(animation);
			}
		});
	});

}


/* -------- Home Pagina --------- */
effects('#presentatie',700, 'slideRight');
effects('#onderzoek',700, 'slideLeft');


/* -------- Over Ons Pagina ------ */
effects('#tekst',500, 'slideUp');
effects('#foto2',500, 'slideUp');
effects('#foto',400, 'bigEntrance');
effects('#tekst2',500, 'bigEntrance');




    
    




