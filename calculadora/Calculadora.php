<?php

    class Calculadora {
        public function efetuarCalculos($valor1,$valor2,$operador){
            switch ($operador){

                case "soma":
                    $resultado = $valor1 + $valor2;
                    break;

                case "subtracao":
                    $resultado = $valor1 - $valor2;
                    break;

                case "multiplicacao":
                    $resultado = $valor1 * $valor2;
                    break;

                case "divisao":
                    $resultado = $valor1 / $valor2;
                    break;

            }
            return $resultado;
        }
    }

?>