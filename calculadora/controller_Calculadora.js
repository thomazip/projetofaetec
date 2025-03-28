$(function(){
    //Para trocar o fundo da caixa de texto VV

    /* 
    $("#valor1").click(function(){
        $(this).css("background-color", "lightgreen");
    });
    $("#valor2").click(function(){
        $(this).css("background-color", "lightgreen");
    })
    */

    $(".op"). click(function(){
        var valor1 = $("#valor1").val();
        var valor2 = $("#valor2").val();
        var operador = $(this).val();

            if (valor1 == ""){
                alert ("Digite o primeiro valor");
                return false;
            }

            if (valor2 == ""){
                alert ("Digite o segundo valor");
                return false;
            }
            
            if (operador == undefined){
                alert ("Escolha o operador");
                return false;
            }

            if (isNaN(valor1) || isNaN(valor2)){
                alert ("Digite apenas números");
                return false;
            }

            if (operador == "divisao" && valor2 == "0"){
                alert ("Não é possível dividir por 0");
                return false;
            }

        $.ajax({
            type:"POST",
            url:"calculadora/controller_Calculadora.php",
            data:"valor1=" + valor1 + "&valor2=" + valor2 + "&operador=" + operador,
            success:function(msg){
                $("#resultado").html(msg);

                /*
                $("#valor1").css("background-color", "white");
                $("#valor2").css("background-color", "white");
                */
               
            },
        });

        return false;
    });
});