<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
    <style>
        h2, {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    function pula2Linhas ()
    {
        echo "<br><br>";
    }

    $nome = "Fernando";

    /*
    echo strtoupper ($nome); 

    pula2Linhas();

    echo strtolower ($nome);

    pula2Linhas();

    echo "meu nome tem: ". strlen($nome). " letras "; 

    echo substr($nome, 0, 3);

    pula2Linhas();

    */

    // FUNÇÕES STRING
    echo strtoupper($nome); //todos os caracteres da $ maiusculo

    echo strtolower($nome ."<br>"); //todos os caracteres da $ minusculo
    pula2Linhas();

    echo "Meu nome tem : ". strlen($nome) . " .letras."; //diz o número de caracteres da $
    pula2Linhas();

    echo substr($nome, 0, 3); //escolhe os três primeiros caracteres da $

    pula2Linhas();

    // FUNÇÕES NUMÉRICAS 

    $valor = 4.89999;
    echo "<br>";

    echo round($valor,2); // aproxima o $valor em 2 casas decimais 
    pula2Linhas();

    echo intval($valor); // aproxima o $valor em um número inteiro
    pula2Linhas();

    $x = rand(1, 100); // escolhe um número aleatório entre 1 e 100
    echo $x;
    pula2Linhas();

    // FUNÇÕES DE DATA E HORA

    echo date("d/m/Y H:i"); // retorna a data e hora corrente conforme informado o tipo de data (d/m/y h:i) *formato BR*
    pula2Linhas();

    echo date("Y-m-d"); // retorna a data no estilo americano (y/m/d)


    ?>
</body>
</html>