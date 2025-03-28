$(function(){
    $(".botao_aluno").click(function(){
        var nota1 = $("#nota1").val();
        var nota2 = $("#nota2").val();
        var nome = $("#nome").val();

        if(isNaN(nota1)||isNaN(nota2)){
            alert("Digite as notas!");
            return false;
        }


        $.ajax({
            type:"POST",
            url:"aluno_media/controller_Aluno.php",
            data:"nota1="+nota1+"&nota2="+nota2+"&nome="+nome,
            success:function(msg){
                $("#resultado_aluno").html(msg);
            },
        });
    })
    
});