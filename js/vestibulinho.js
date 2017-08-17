//Auto preenchimento endereço

$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }
    
    $('#alert-cep').hide(); 
    //Quando o campo cep perde o foco.
    $("#cep").on('keyup', function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#uf").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                        $('#alert-cep').hide();                        
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        $('#alert-cep').show();
                        $('#alert-cep').html("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                $('#alert-cep').show();
                $('#alert-cep').html("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

    $("#cep").change(naoTenhoCEP());
});



//Imprimir comprovante
$(document).ready(function() {
    $("#btnPrint").live("click", function () {//$btnPrint is button which will trigger print
        var divContents = $("#printframe").html();//div which have to print
        var printWindow = window.open('', '', 'height=700,width=900');
        printWindow.document.write('<html><head><title>Comprovante de Inscrição</title>');
        printWindow.document.write('<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" >');//external styles
        printWindow.document.write('<link rel="stylesheet" href="/css/vestibulinho.css" type="text/css"/>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        printWindow.onload=function(){
        printWindow.focus();                                         
        printWindow.print();
        printWindow.close();
        }
    });
});

function testaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;
    if (strCPF == "") return true;
    if (strCPF == "00000000000") return false;
    
    for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;
    
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
    
    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
    
    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
    return true;
}

function naoTenhoCEP()
{
    if ($('#cep').val() == 'Sem CEP')
    {
        $('#cep').attr('readonly', '');
        $('#cep').val('Não tenho CEP');

        $('#rua').removeAttr('readonly');
        $('#bairro').removeAttr('readonly');
        $('#cidade').removeAttr('readonly');
        $('#estado').removeAttr('readonly');

        $('#rua').attr('placeholder', 'Digite sua rua*');
        $('#bairro').attr('placeholder', 'Digite seu bairro*');
        $('#cidade').attr('placeholder', 'Digite sua cidade*');
        $('#estado').attr('placeholder', 'Digite seu estado*');
    }
}


(function($) {
    "use strict"; // Start of use strict

    //Ajustar cidades sem CEP
    var t1=window.setInterval(function(){naoTenhoCEP()},200);



	//Ajustar data de nascimento    
    $('#nascimento').on('keyup', function()
    {
    	var data = $('#nascimento').val().replace(/\D/g, '');
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
    	$('#nascimento').val(data);
    });

    //Ajustar CPF
    $('#CPF').on('keyup', function()
    {
        var num = $('#CPF').val().replace(/\D/g, '');
        $('#CPF').val(num);
    });

   	//Ajustando necessidade especial
   	$('#necessidade_pre').change(function(){
   		if($('#necessidade_pre').val() == 'sim')
	   	{
	   		$('#necessidade').attr('type', 'text');
	   		$('#necessidade').attr('required', '');
	   	}
	   	else
	   	{
	   		$('#necessidade').attr('type', 'hidden');
	   		$('#necessidade').removeAttr('required', '');
	   	}
   	});
   	

   	//Ajustando ex-aluno
	$('#exAluno2').hide();

   	$('#exAluno_pre').change(function(){
   		if($('#exAluno_pre').val() == 'sim')
	   	{
	   		$('#exAluno1').show();
	   		$('#exAluno2').hide();
	   		$('#exAluno1').attr('required', '');
	   		$('#exAluno1').attr('name', 'exAluno');
	   		$('#exAluno2').removeAttr('required');
	   		$('#exAluno2').removeAttr('name');

	   	}
	   	else
	   	{
	   		$('#exAluno2').show();
	   		$('#exAluno1').hide();
	   		$('#exAluno2').attr('required', '');
	   		$('#exAluno2').attr('name', 'exAluno');
	   		$('#exAluno1').removeAttr('required');
	   		$('#exAluno1').removeAttr('name');
	   	}
   	});

    //Validation para button submit
    $("#alert-final").hide();

    var isSelected = false, isCPFValido = true, isNascimentoValido = false; 

    $('#confirma-edital').change(function(){
        if($('#confirma-edital').prop('checked'))
        {
            isSelected = true;
        }else{
            isSelected = false;
        }
        if(isSelected && isCPFValido && isNascimentoValido)
        {
            $('#submit-vestibulinho').removeAttr('disabled');
        }else{
            $('#submit-vestibulinho').attr('disabled', '');
        }
    });

    $('#CPF').on('keyup', function()
    {
        if(testaCPF($('#CPF').val()))
        {
            $("#alert-final").hide();
            $("#alert-final").html("");
            $("#alert-cpf").hide();
            $("#alert-cpf").html("");
            isCPFValido = true;
        } else {
            $("#alert-final").show();
            $("#alert-final").html("Atenção: CPF inválido!");
            $("#alert-cpf").show();
            $("#alert-cpf").html("CPF inválido");
            isCPFValido = false;
        }
        if(isSelected && isCPFValido && isNascimentoValido)
        {
            $('#submit-vestibulinho').removeAttr('disabled');
        }else{
            $('#submit-vestibulinho').attr('disabled', '');
        }
    });

    $('#nascimento').on('keyup', function()
    {
        var data = $('#nascimento').val();
        var n = data.length;
        if(n == 10)
        {
            $("#alert-final").hide();
            $("#alert-final").html("");
            $("#alert-nascimento").hide();
            $("#alert-nascimento").html("");
            isNascimentoValido = true;
        }else{
            $("#alert-final").show();
            $("#alert-final").html("Atenção: Data de Nascimento inválida!");
            $("#alert-nascimento").show();
            $("#alert-nascimento").html("Data de Nascimento inválida");
            isNascimentoValido = false;
        }
        if(isSelected && isCPFValido && isNascimentoValido)
        {
            $('#submit-vestibulinho').removeAttr('disabled');
        }else{
            $('#submit-vestibulinho').attr('disabled', '');
        }
        
    });


    //END VALIDATION



})(jQuery); // End of use strict