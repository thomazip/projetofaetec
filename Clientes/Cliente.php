<?php
include 'conexao.php';
class Cliente{
    public function listarClientes(){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();
        $consulta="SELECT * From Cliente";
        $resultado=mysqli_query($con,$consulta)
        or die("Falha na execução a consulta");

        $msg ="";

        while ($linha=mysqli_fetch_assoc($resultado))
        {
        $NomeDaEmpresa=$linha["NomeDaEmpresa"];
        $NomeDoContato=$linha["NomeDoContato"]; 
        $CodigoDoCliente=$linha ["CodigoDoCliente"];
        $Cidade=$linha["Cidade"];
        $IdCliente=$linha["IdCliente"];
        $Email=$linha["Email"];
        $Telefone=$linha["Telefone"];
        
        
        $msg.="<tr>";
        $msg.="<td>$CodigoDoCliente</td>";
        $msg.="<td>$NomeDaEmpresa</td>";
        $msg.="<td>$NomeDoContato</td>";
        $msg.="<td>$Cidade</td>";
        $msg.="<td>$Email</td>";
        $msg.="<td>$Telefone</td>";

        //                                               FOI USADO BOOTSTRAP ↓↓
        $msg .= "<td><button type='button' id='$IdCliente' class='btn btn-success editar_cliente'>Editar</button>  
        <button type='button' id='$IdCliente' class='btn btn-danger excluir_cliente'>Excluir</button>
        </td>";

        $msg.="</tr>";

        }
        
        return $msg;
    }

    public function inserirCliente($CodigoDoCliente, $NomeDaEmpresa, $NomeDoContato, $Cidade, $Email, $Telefone) {
        $conexao = new Conexao();
        $con = $conexao->conectarBanco();
    
        // Verifica se o CodigoDoCliente já existe
        $consultaVerificacao = "SELECT * FROM Cliente WHERE CodigoDoCliente = '$CodigoDoCliente'";
        $resultadoVerificacao = mysqli_query($con, $consultaVerificacao);
    
        if (mysqli_num_rows($resultadoVerificacao) > 0) {
            // Se o CodigoDoCliente já existe, retorna a mensagem
            return "Código já cadastrado";
        } else {
            // Se o CodigoDoCliente não existe, insere o novo registro
            $consulta = "INSERT INTO Cliente
                         (CodigoDoCliente, NomeDaEmpresa, NomeDoContato, Cidade, Email, Telefone)
                         VALUES
                         ('$CodigoDoCliente', '$NomeDaEmpresa', '$NomeDoContato', '$Cidade', '$Email', '$Telefone')";
    
            $resultado = mysqli_query($con, $consulta);
    
            if ($resultado) {
                $msg = "Dados adicionados com sucesso";
            } else {
                $msg = "Falha na execução da consulta";
            }
            
            return $msg;
        }
    }
    

    public function alterarCliente($IdCliente,$CodigoDoCliente,$NomeDoContato,$NomeDaEmpresa,$Cidade,$Email,$Telefone){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();

        $consulta="UPDATE Cliente
        SET NomeDoContato='$NomeDoContato' , NomeDaEmpresa='$NomeDaEmpresa',CodigoDoCliente='$CodigoDoCliente',Cidade='$Cidade' , Email='$Email' , Telefone='$Telefone'
        WHERE IdCliente='$IdCliente'";
       
        $resultado=mysqli_query($con,$consulta)
        or die($consulta);

        $msg = "Dados alterado com sucesso";
        return $msg;
    }

    

    public function excluirCliente($IdCliente){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();

        $consulta="DELETE FROM Cliente
        WHERE IdCliente='$IdCliente'";
   
        $resultado=mysqli_query($con,$consulta)
        or die("Falha na execução da consulta");
        
        $msg = "Registro excluido com sucesso";
        return $msg;
    }



    public function selecionarUmCliente($id){
	$conexao = new Conexao();
	$con = $conexao-> conectarBanco();

	$consulta = "SELECT * FROM cliente where IdCliente = $id";
	if ($resultado = mysqli_query($con, $consulta)) 
	{   
		while ($linha = mysqli_fetch_assoc($resultado))
		{ ?>			   
			<p><input type="hidden" id="IdCliente"  value="<?php echo $linha['IdCliente'] ;?>"> </p>
			<p><input type="text" id="CodigoDoCliente" value="<?php echo $linha['CodigoDoCliente'] ;?>"></p>
			<p><input type="text" id="NomeDaEmpresa" value="<?php echo $linha['NomeDaEmpresa'] ;?>"></p>
			<p><input type="text" id="NomeDoContato" value="<?php echo $linha['NomeDoContato'] ;?>"></p> 
			<p><input type="text" id="NomeDaCidade" value="<?php echo $linha['Cidade'] ;?>"></p>				
			<p><input type="text" id="Email" value="<?php echo $linha['Email'] ;?>"></p>				
			<p><input type="text" id="Telefone" value="<?php echo $linha['Telefone'] ;?>"></p>				
		<?php          
	   }
	}
}
}
?>