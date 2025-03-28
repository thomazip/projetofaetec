<?php 
class Frutas{
    public function exibirFrutas($frutasselecionadas){
        $cores=array(
            "Abacaxi" => "green", 
            "Uva"=>"purple",
            "Manga"=>"orange",
            "Banana"=>"gold",
            "Morango"=> "red");
        $resultado="";
        foreach($frutasselecionadas as $valor){
            $cor=$cores["$valor"];
            $resultado.="<span style='color:$cor;'>$valor</span>&nbsp;&nbsp;";
                }
            return $resultado;

    }

    public function quantidadeFrutas($frutasselecionadas){
        $quantidade=count($frutasselecionadas);
        return $quantidade;
    }

    public function precoSalada($frutasselecionadas){
            $preco=count($frutasselecionadas)*5;
            return $preco;
    }

}



?>