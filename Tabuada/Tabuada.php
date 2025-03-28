<?php 
class Tabuada{

    public function exibirTabuada($fator){
        $resultado = "";

        for($i=1;$i<=10;$i++){
            $resultado .= "<b>".$fator ." x ". $i ." = ". ($fator * $i) ."</b>"."<br>";
        }
        return $resultado;
    }
}

?>