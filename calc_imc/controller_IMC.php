<?php
    include "IMC.php";
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = new IMC();
    $valorIMC = $imc -> calcularIMC($peso, $altura);
    $situacao = $imc -> verificarSituacao($valorIMC);
    $descricao = $imc -> obterDescricao($valorIMC);

    echo "<h2> Valor IMC: ". number_format($valorIMC, 2)." kg</h2>". "<br>";
    echo  "<h2> Situação: ".$situacao."</h2>";
    echo  "<h2>".$descricao."</h2>". "<br>";



?>