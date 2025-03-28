<?php
 include "Dado.php";

 $acao = $_POST["acao"];
 
  $dado = new Dado();

  switch($acao)
  {
	  case "jogarDado":
		   $valordado = $dado -> jogarDado();
		   echo $valordado;
	  break;

		case "mostrarResultadoJogoDado":
			$dado1 = $_POST["dado1"];
 			$dado2 = $_POST["dado2"];

			$resultadojogo = $dado -> mostrarResultadoJogoDado($dado1, $dado2);

			echo $resultadojogo;
		break;
  } 

?>