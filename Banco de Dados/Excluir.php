<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "conexao.php";

    $IdCliente="6";
 
    $consulta="DELETE FROM Cliente
    WHERE IdCliente='$IdCliente'";
   
    $resultado=mysql_query($consulta)
     or die("Falha na execução da consulta");
    echo "Registro excluido com sucesso";
    ?>

</body>
</html>