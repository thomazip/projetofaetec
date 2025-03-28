<?php

   /* for(inicial;condição;incremento){
   }
   
       FUNÇÃO PARA ADICIONAR _'s , DE 1 A 20, CRESCENTE
        
       function linha(){
           for($i=1;$i<=20;$i++){
               echo "_";
            }
        }

        linha().linha();

        echo "<br>";
        
        de 1 a 10, crescente


        for($i=1;$i<=10;$i++){
            echo $i . "<br>";
        }

        de 1 a 20, crescente


        for($i=1;$i<=20;$i++){
            echo "_";
        }

        de 10 a 0, decrescente

            
        for($i=10;$i>=0;$i--){
            echo "<br>". $i;
        }
        

        linha().linha();
        
        
        // sinal de % É o RESTO da DIVISÃO ( / )


        de 0 a 50, dizendo se é par ou impar ao lado:

        for ($i=1;$i<=50;$i++){
            if($i % 2 == 0){
                echo $i . "- PAR". "<br>";
            }
            else {
                echo $i . "- IMPAR". "<br>";
            }
        }
        
        
        for($i=1;$i<=100;$i++){
            echo $i. "&nbsp;"."&nbsp;";
        }
        
        
        */

        
        for($i=1;$i<=100;$i++){
            if($i < 10){
                echo "0". $i. "&nbsp;";
            }
            elseif($i % 10 == 0){
                echo $i ."&nbsp;"."<br>";
            }
            else{
                echo $i. "&nbsp;";
            }
        }
        
        
        ?>