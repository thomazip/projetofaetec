
$(function(){
    $(".jogada").click(function(){
        
        // Obter o valor do input radio selecionado com o nome 'jogada' e atribuir a minhajogada

        var minhajogada = $(".jogada:checked").val();
        
        $.ajax({
            type:"POST",
            url:"Jokempo/controller_Jokempo.php",
            data: "minhajogada=" + minhajogada,
            success:function(msg){
                $("#msg_jokempo").html(msg);
            },

            // Enviar os dados (a jogada do jogador) para o servidor
            
            // Se a requisição for bem-sucedida, executar a função de callback
            
            // Substituir o conteúdo do elemento com o id 'msg_jokempo'

        });
        return false;
    });
})
