$(function(){
    var opcoes= '<option value= ""></option>';
    var i;
    i=1;
    while (i<=20){
        opcoes +='<option value= "'+ i +'">'+ i + '</option>';
        i++;
    }

     $("#num").html(opcoes);
            $("#num").change (function(){
                var num = $ (this).val();
                
               $.ajax({
                type:"POST",
                url:"Potencia/controller_Potencia.php",
                data: "num=" + num,
                success: function(msg){
                 $("#msg_potencia").html(msg);   

             },
        });
    });
});
