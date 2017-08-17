
function descricaoCasd() {
    var popup = document.getElementById("descricaoCasd");
    popup.classList.toggle("show");
}

function descricaoCasdinho() {
    var popup = document.getElementById("descricaoCasdinho");
    popup.classList.toggle("show");
}

//Carrossel Parceiros
$(function() {

    var $c = $('#carousel'),
    $w = $(window);

    $c.carouFredSel({
        align: false,
        items: 10,
        scroll: {
            items: 1,
            duration: 2000,
            timeoutDuration: 0,
            easing: 'linear',
            pauseOnHover: 'immediate'
        }
    });

    $c.height(300);


    $w.bind('resize.example', function() {
        var nw = $w.width();
        if (nw < 990) {
            nw = 990;
        }

        $c.width(nw * 3);
        $c.parent().width($('#wrapper').width());

    }).trigger('resize.example');

});



(function($) {
    "use strict"; // Start of use strict

    var t1=window.setInterval(function(){foo()},200);
    function foo()
    {
        var marginIgual = ($('#logoCasd').height() - $('#igual').height())/2;

        $("#mais").css("margin-top", marginIgual);
        $("#igual").css("margin-top", marginIgual);

        $('.queroAjudarImg').height($('.queroAjudarImg').width());

        if($(window).width()<768)
        {
            $("#popCasd>h3").removeClass("hidden");
            $('#descricaoCasd').addClass("popuptext");


            $("#popCasdinho>h3").removeClass("hidden");
            $('#descricaoCasdinho').addClass("popuptext");

            $('#uhul').addClass("hidden");
        }
        else
        {
            $("#popCasd>h3").addClass("hidden");
            $('#descricaoCasd').removeClass("popuptext");


            $("#popCasdinho>h3").addClass("hidden");
            $('#descricaoCasdinho').removeClass("popuptext");

            $('#uhul').removeClass("hidden");
        }
    }

    $('#close-popup-casd').click(function(){
        $('#popup-vestibulinho-casd').hide();
    });

})(jQuery); // End of use strict