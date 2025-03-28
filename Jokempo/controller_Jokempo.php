<?php 
include 'Jokempo.php';

// incluí o jokempo.php (onde está o jogo)

$jokempo = new Jokempo();

//criei um objeto jokempo

$minhajogada = $_POST['minhajogada'];

//peguei os valores da minha jogada do JavaScript

$jogadacomputador = $jokempo -> retornarJogadaComputador();

//jogadacomputador vai usar o obj, buscar e retornar o retornarJogadaComputador()

$resultado = $jokempo -> retornarVencedor($minhajogada, $jogadacomputador);

//resultado vai usar o obj , buscar e retornar o vencedor

$exibicao = $jokempo -> exibirResultado($minhajogada, $jogadacomputador, $resultado);

//exibicao vai usar o obj para buscar e exibir o resultado do Jokempo.php

echo $exibicao;

//exibir o $exibicao
?>
