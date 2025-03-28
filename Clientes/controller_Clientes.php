<?php
include 'Cliente.php';

$acao = $_REQUEST["acao"];
$cliente = new Cliente();

    switch($acao){
        case 'inserir':
            $CodigoDoCliente = $_REQUEST['codigo'];
            $NomeDaEmpresa = $_REQUEST['empresa'];
            $NomeDoContato = $_REQUEST['contato'];
            $Cidade = $_REQUEST['cidade'];
            $Email = $_REQUEST['email'];
            $Telefone = $_REQUEST['telefone'];

            $inserir = $cliente -> inserirCliente($CodigoDoCliente,$NomeDaEmpresa,$NomeDoContato,$Cidade,$Email,$Telefone);

            echo $inserir;
            break;

        case 'excluir':
            $IdCliente = $_REQUEST['IdCliente'];

            $apagar = $cliente -> excluirCliente($IdCliente);
            echo $apagar;
            break;

        case 'editar':
            $id = $_REQUEST['IdCliente'];

            $editar = $cliente -> selecionarUmCliente($id);
            echo $editar;
            break;

        case 'alterar':
            $IdCliente = $_REQUEST['idcliente'];
            $CodigoDoCliente = $_REQUEST['codigo'];
            $NomeDaEmpresa = $_REQUEST['empresa'];
            $NomeDoContato = $_REQUEST['contato'];
            $Cidade = $_REQUEST['cidade'];
            $Email = $_REQUEST['email'];
            $Telefone = $_REQUEST['telefone'];

            $alterar = $cliente -> alterarCliente($IdCliente,$CodigoDoCliente,$NomeDoContato,$NomeDaEmpresa,$Cidade,$Email,$Telefone);

        echo $alterar;
        break;

            
    }

?>