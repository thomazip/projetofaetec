<?php

mysql_connect("localhost", "root", "usbw")
or die ("Não foi possível a conexão!");

mysql_selectdb("php202401n1")
or die ("Erro na seleção do Banco de Dados!");

echo "Conectou!";

?>