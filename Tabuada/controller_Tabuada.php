<?php
include 'Tabuada.php';

$tabuada = new Tabuada();

$fator = $_POST["num"];

$resultado = $tabuada -> exibirTabuada($fator);

echo $resultado;


?>