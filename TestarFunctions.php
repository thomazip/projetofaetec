<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestarFunctions</title>
    <style>
    h1,h2 {
        text-align: center;
        font-family: Arial;
    }
     
    h1 {
        font-size: 50px;
    }
    h2 {
        font-style: italic;
        font-size: 40px;
        font-family: Trebuchet MS, sans-serif;
    }
    </style>
</head>
<body>
    
    <?php
        include "functions.php";
        
        echo "<h1>Mônaco, ". escreverDataHoraCorrente() . " </h1>";

        echo "<h2>". pular2Linhas() . "</h2>";
        echo "<h2>". saudacao() . "</h2>"; 

        echo pular2Linhas();

        echo "<h2>Faltam ". diasFaltandoPara2025(). " dias para 2025</h2>";

    ?>

</body>
</html>