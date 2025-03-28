<?php 
class Potencia{

    public function exibirPotencia($n){
        $exibicao = "";
        $i=1;
            while($i<=10){
                $potencia = pow($n,$i);
                $exibicao .="<b>". $n . "<sup>".$i."</sup> = ".$potencia. "</b>"."<br>";
                $i++;
            }
        return $exibicao;
    }
}

?>