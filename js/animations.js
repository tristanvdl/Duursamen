function effects(id, pixels, animation) {
    $(window).scroll(function() {
        $(id).each(function() {
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow + pixels) {
                $(this).addClass(animation);
            }
        });
    });

}

function effectsLoad(id, animation) {
    $(window).load(function() {

        $(id).addClass(animation);

    });

}


/* -------- Home Pagina --------- */
effects('#presentatie', 700, 'slideRight');
effects('#onderzoek', 700, 'slideLeft');


/* -------- Over Ons Pagina ------ */
effectsLoad('#tekst', 'slideUp');
effects('#foto2', 700, 'slideUp');
effectsLoad('#foto', 'bigEntrance');
effects('#tekst2', 700, 'bigEntrance');

/* -------- Diensten Pagina ------ */
effectsLoad('.onderzoek', 'slideRight');
effectsLoad('.presentaties', 'slideUp');
effectsLoad('.workshops', 'slideLeft');

/* -------- Blog Pagina ------ */
effectsLoad('.grid-item', 'slideUp');