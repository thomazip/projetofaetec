
<?php
class Jokempo{
    
//criar a classe jokempo

public function retornarJogadaComputador(){

    //criar função para retornar a jogada da CPU

    $jogada_c = rand(1,3);
        switch($jogada_c){
            case 1:
                $aposta = 'Pedra';
            break;

            case 2:
                $aposta = 'Papel';
            break;

            case 3:
                $aposta = 'Tesoura';
            break;

        // jogada da cpu, escolher randomicamente entre as 3 possibiliade, caso 1 = pedra, caso 2 = papel, caso 3 = tesoura

        }
    return $aposta;
}

public function retornarVencedor($meujogo, $jogoComputador){

    //função para retornar quem é o vencedor , passando os parametros do meu jogo e o jogo da cpu

    if ($meujogo == $jogoComputador) 
    {
        $resultado = "Empate!";
    } 

    //se meu jogo for igual o da cpu, = empate

    else if(
     ($meujogo == "Pedra" && $jogoComputador == "Tesoura") ||
     ($meujogo == "Papel" && $jogoComputador == "Pedra") || 
     ($meujogo == "Tesoura" && $jogoComputador == "Papel")) 
     {
        $resultado = "Você venceu!";
     } 

     // autoexplicativo

     else 
     {
        $resultado = "Computador venceu!";
     }

     // se não ganhei,perdi

    return $resultado;
}

public function exibirResultado($minhajogada, $jogadacomputador, $jogo){

    // função para exibir o resultado, passando os parametros da minha jogada, da jogada da cpu e do jogo

    $exibicao = "";
        
        $exibicao .= "<div class='div-1'><h3>Você</h3>
                        <div><img src=Jokempo/images/" . $minhajogada . ".png></div>
                    </div>";
        $exibicao .= "<div class='div-2'><h3>Computador</h3>
                        <div><img src=Jokempo/images/" . $jogadacomputador . ".png></div>
                    </div>";
        $exibicao .= "<div class='div-3'>
                        <h2 class='piscante'>" . $jogo . "</h2>
                    </div>";

        // exibe a minha jogada, exibe a jogada do computador, e exibe o resultado

        return $exibicao;
}
   
}

?>