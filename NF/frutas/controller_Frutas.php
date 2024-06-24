<?php 
include "Frutas.php";
$frutas=new Frutas();
$frutasSelecionadas=$_POST["frutasSelecionadas"];
$exibir=$frutas-> exibirFrutas($frutasSelecionadas);
$quantidade=$frutas-> quantidadeFrutas($frutasSelecionadas);
$preco = $frutas-> precoSalada($frutasSelecionadas);
echo "<b>Frutas selecionadas:</b> " . $exibir ."<br>";
echo "<b>Quantidade de frutas :</b> " . $quantidade ."<br>";
echo "<b>Preço :</b>R$" . $preco ."<br>";





?>