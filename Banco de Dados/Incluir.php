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

    $CodigoDoCliente="RJ002";
    $NomeDaEmpresa="Fatech";
    $NomeDoContato="Joao Silva";
    $Cidade="Rio de Janeiro";
    
    $consulta="INSERT INTO Cliente
    (CodigoDoCliente, NomeDaEmpresa, NomeDoContato,Cidade)
    VALUES
    ('$CodigoDoCliente', '$NomeDaEmpresa', '$NomeDoContato','$Cidade')";
    $resultado=mysql_query($consulta)

    or die("Falha na execução a consulta");
    echo "Dados adicionado com sucesso";
    ?>

</body>
</html>