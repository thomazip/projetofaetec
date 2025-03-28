<?php
/* 
$frutas[0]= "uva";
$frutas[1]= "manga";
$frutas[2]= "morango";


$tamanho=count($frutas);

for ($i = 0; $i<$tamanho;$i++){
    echo $frutas[$i]. "&nbsp;&nbsp;";
}
*/

$frutas = array("uva","manga","morango");

foreach($frutas as $valor){
    echo $valor . "&nbsp;&nbsp;";
}
?>