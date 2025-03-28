
<?php
    include "Calculadora.php";

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $operador = $_POST["operador"];

    $calculadora = new Calculadora();
    $resultado = $calculadora -> efetuarCalculos($valor1,$valor2,$operador);

    echo "<h2>".$resultado."</h2>";
?>
