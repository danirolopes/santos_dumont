(function($) {
    "use strict"; // Start of use strict

    $('#submit_status_casd').click(function(){
    	$('#status_casd').submit();
    });

    $('#submit_status_casdinho').click(function(){
    	$('#status_casdinho').submit();
    });

    $('#submit_consulta_casd').click(function(){
    	$('#consulta_casd').submit();
    });

    $('#submit_consulta_casdinho').click(function(){
    	$('#consulta_casdinho').submit();
    });


    //Ajustando data
    $('#date_vestibulinho_casd').on('keyup', function()
    {
        var data = $('#date_vestibulinho_casd').val();
        var n = data.length;
        if(n > 2)
        {
            if(data.charAt(2) != '/')
            {
                data = data.substring(0,2)+'/'+data.substring(2, n);
            }
        }
        n = data.length;
        if (n > 5)
        {
            if(data.charAt(5) != '/')
            {
                data = data.substring(0,5)+'/'+data.substring(5, n);
            }
        }
        $('#date_vestibulinho_casd').val(data);
    });

    $('#date_vestibulinho_casdinho').on('keyup', function()
    {
        var data = $('#date_vestibulinho_casdinho').val();
        var n = data.length;
        if(n > 2)
        {
            if(data.charAt(2) != '/')
            {
                data = data.substring(0,2)+'/'+data.substring(2, n);
            }
        }
        n = data.length;
        if (n > 5)
        {
            if(data.charAt(5) != '/')
            {
                data = data.substring(0,5)+'/'+data.substring(5, n);
            }
        }
        $('#date_vestibulinho_casdinho').val(data);
    });

    $('#termino_vestibulinho_casd').on('keyup', function()
    {
        var data = $('#termino_vestibulinho_casd').val();
        var n = data.length;
        if(n > 2)
        {
            if(data.charAt(2) != '/')
            {
                data = data.substring(0,2)+'/'+data.substring(2, n);
            }
        }
        n = data.length;
        if (n > 5)
        {
            if(data.charAt(5) != '/')
            {
                data = data.substring(0,5)+'/'+data.substring(5, n);
            }
        }
        $('#termino_vestibulinho_casd').val(data);
    });

    $('#termino_vestibulinho_casdinho').on('keyup', function()
    {
        var data = $('#termino_vestibulinho_casdinho').val();
        var n = data.length;
        if(n > 2)
        {
            if(data.charAt(2) != '/')
            {
                data = data.substring(0,2)+'/'+data.substring(2, n);
            }
        }
        n = data.length;
        if (n > 5)
        {
            if(data.charAt(5) != '/')
            {
                data = data.substring(0,5)+'/'+data.substring(5, n);
            }
        }
        $('#termino_vestibulinho_casdinho').val(data);
    });

})(jQuery); // End of use strict