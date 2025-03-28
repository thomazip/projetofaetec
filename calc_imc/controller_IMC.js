$(function(){
    $(".botao").click(function(){
        var peso = $("#peso").val();
        var altura = $("#altura").val();
        var nome = $("#nome").val();

        if(isNaN(peso)||isNaN(altura)){
            alert("Digite as notas!");
            return false;
        }

        $.ajax({
            type:"POST",
            url:"calc_imc/controller_IMC.php",
            data:"peso="+peso+"&altura="+altura,
            success:function(msg){
                $("#resultado").html(msg);
            },
        });
    })
})