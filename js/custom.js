(function($) {
    "use strict"; // Start of use strict
    
    
    var t1=window.setInterval(function(){foo()},200);
    function foo()
    {
        //AJUSTANDO COLAPSE
        if($(window).width() <= 1200)
        {
            $('#CESDiconDiv').addClass("hidden");
        } else {
            $('#CESDiconDiv').removeClass("hidden");
        }

        $('#CESDicon').height($('#referencia').height());

        if($(window).width() <= 768)
        {
            $('#u101').css('margin-left', '25px');
        }
        else
        {
            $('#u101').css('margin-left', '15px');
        }


        //AJUSTANDO MARGIN HEADER
        var heightNav = $('#mainNav').height() + 2*10; //10 é o padding top da mainNav
        $('#header').css('margin-top', heightNav);


        //Ajustando social media buttons
        if($(window).width() >= 1175)
        {
            $('.social-media').height($('#referencia').height()*0.8);
            $('.social-media').width($('#referencia').height()*0.8);
        } else {
            var height = 40;
            $('.social-media').height(height);
            $('.social-media').width(height);
        }

        var marginSocial = $('#social-media-container').height() - $('#social-media-container > div').height();
        $('#social-media-container > div').css("margin-top", marginSocial/2);

        //AJUSTANDO FOOTER

        var heightCesdFooter = $('#CesdFooter').height();
        var heightCursoFooter = $('#cursoFooter').height();

        if (heightCursoFooter > heightCesdFooter)
        {
            $('#CesdFooter').height(heightCursoFooter);
        }
        else
        {
            $('#cursoFooter').height(heightCesdFooter);
        }

    }

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li .close-menu').click(function(){ 
            $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    })
   
    //Ajustando PagSeguro

    $('#pagSeguro').width($('#pagSeguroImage').width());


})(jQuery); // End of use strict
