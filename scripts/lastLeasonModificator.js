//version 2.0
$(document).ready(function(){
    $("#card-one").hover(function(){
        $(this).removeClass("col-sm").addClass("col-12");    
        $("#card-one").addClass("hoverLeason");
    },
    $("#card-one").click(function(){
        $(this).removeClass("col-sm").addClass("col-sm");
        $(this).removeClass("hoverLeason");
    }),
    $("#card-one #card_SON_one").mouseleave(function(){
        $("#card-one").removeClass("col-12").removeClass("hoverLeason").addClass("col-sm");
    }));
    
//cas deux

    $("#card-two").hover(function(){
        $(this).removeClass("col-sm").addClass("col-12");    
        $("#card-two").addClass("hoverLeason");
    },
    $("#card-two").click(function(){
        $(this).removeClass("col-12").addClass("col-sm");
        $(this).removeClass("hoverLeason");
    }),
    $("#card-two #card_SON_two").mouseleave(function(){
        $("#card-two").removeClass("col-12").addClass("col-sm").removeClass("hoverLeason");
    }));

//cas trois

    $("#card-three").hover(function(){
        $(this).removeClass("col-sm").addClass("col-12");    
        $("#card-three").addClass("hoverLeason");
    },
    $("#card-three").click(function(){
        $(this).removeClass("col-12").addClass("col-sm");
        $(this).removeClass("hoverLeason");
    }),
    $("#card-three #card_SON_three").mouseleave(function(){
        $("#card-three").removeClass("col-12").removeClass("hoverLeason").addClass("col-sm");

    }));

//cas 4

    $("#card-four ").hover(function(){
        $(this).removeClass("col-sm").addClass("col-12");    
        $("#card-four").addClass("hoverLeason");
    },
    $("#card-four").click(function(){
        $(this).removeClass("col-12").addClass("col-sm");
        $(this).removeClass("hoverLeason");
    }),
    $("#card-four #card_SON_FOUR").mouseleave(function(){
        $("#card-four").removeClass("col-12").removeClass("hoverLeason").addClass("col-sm");
    }));
});

//version 1.0


/*
$(document).ready(function(){
    $("card_number").hover(function(){
        $(this).removeClass("col-sm").addClass("col-12");
        $(this).addClass("hoverLeason");
    },
    function(){
        $(this).removeClass("col-12").addClass("col-sm");
        $(this).removeClass("hoverLeason");
        
    });
});

*/
/*version 3.0 */
/* récupération de la taille de l'écran */
/*
function centrerElementAbsolu(element)
{
	var largeur_fenetre = $(window).width();
	var hauteur_fenetre = $(window).height();

	var haut = (hauteur_fenetre - element.height()) / 2 + $(window).scrollTop();
	var gauche = (largeur_fenetre - element.width()) / 2 + $(window).scrollLeft();
	element.css({position: 'absolute', top: haut, left: gauche});
}

$(document).ready(function(){
    $("#card-one").hover(function(){
        $(this).removeClass("col-sm").addClass("col-12").centrerElementAbsolu($("#card-one"));    
        $("#card-one").addClass("hoverLeason");
    },
    $("#card-one").click(function(){
        $(this).removeClass("col-sm").addClass("col-sm");
        $(this).removeClass("hoverLeason");
    }),
    $("#card-one").mouseout(function(){
        $(this).removeClass("col-12").addClass("col-sm");
        $(this).removeClass("hoverLeason");
    }));
});
*/