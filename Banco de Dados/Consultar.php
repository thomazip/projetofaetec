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
    
    $consulta="SELECT * From Cliente";
    $resultado=mysql_query($consulta)
    or die("Falha na execução a consulta");

    while ($linha=mysql_fetch_assoc($resultado))
    {
    $NomeDaEmpresa=$linha["NomeDaEmpresa"];
    $NomeDoContato=$linha["NomeDoContato"]; 
    $CodigoDoCliente=$linha ["CodigoDoCliente"];
    $Cidade=$linha["Cidade"];
    
    echo"<b>NomeDaEmpresa:</b>$NomeDaEmpresa<br>";
    echo"<b>NomeDoContato:</b>$NomeDoContato<br>";
    echo"<b>CodigoDoCliente:</b>$CodigoDoCliente<br>";
    echo"<b>Cidade:</b>$Cidade<br>";
    }

    ?>

</body>
</html>