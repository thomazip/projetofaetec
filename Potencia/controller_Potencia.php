<?php
include 'Potencia.php';

$potencia = new Potencia();

$n = $_POST["num"];

$exibicao = $potencia -> exibirPotencia($n);

echo $exibicao;


?>