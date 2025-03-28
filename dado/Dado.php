<?php
class Dado
{
    public function jogarDado()
    {
      return rand(1,6);
    }   

	function mostrarResultadoJogoDado($dado1, $dado2)
	{		
		
		if(intval($dado1) == intval($dado2))
		{
			$resultado ="Empate";
		}
		else if(intval($dado1) > intval($dado2))
		{
			$resultado ="Vitória do Jogador 1";
		}
		else
		{
			$resultado = "Vitória do Jogador 2";
		}

		return $resultado;
	}

}
?>
