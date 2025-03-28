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

    $IdCliente="2";
    $NomeDoContato="Pedro Gomes";
    
    $consulta="UPDATE Cliente
    SET NomeDoContato= '$NomeDoContato'
    WHERE IdCliente='$IdCliente'";
   
    $resultado=mysql_query($consulta)
    or die("Falha na execução a consulta");
    echo "Dados alterado com sucesso";
    ?>

</body>
</html>