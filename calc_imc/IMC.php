<?php

class IMC {
    public function calcularIMC($peso, $altura) {
        
        $IMC = $peso / ($altura * $altura);
        return $IMC;
    }
    public function verificarSituacao($IMC) {
        $situacao = "";

        if ($IMC < 18.5){
            $situacao = "Abaixo do Peso";
        }

        elseif ($IMC < 24.9 ){
            $situacao = "Peso Normal";
        }

        elseif ($IMC < 29.9 ){
            $situacao = "Sobrepeso";
        }

        elseif ($IMC < 34.9 ){
            $situacao = "Obesidade Grau I";
        }

        elseif ($IMC < 39.9 ){
            $situacao = "Obesidade Grau II";
        }

        else{
            $situacao = "Obesidade Mórbida";
        }
        return $situacao ;
    }
    public function obterDescricao($IMC) {
        $descricao = "";
        
        if ($IMC < 18.5){
            $descricao = "Indica que a pessoa está abaixo do peso considerado saudável para sua altura. Pode indicar desnutrição, falta de nutrientes essenciais ou outros problemas de saúde.";
        }

        elseif ($IMC < 24.9 ){
            $descricao = "Indica que a pessoa está dentro da faixa de peso considerada saudável para sua altura. É o intervalo ideal para a maioria das pessoas em termos de saúde e bem-estar.";
        }

        elseif ($IMC < 29.9 ){
            $descricao = "Indica que a pessoa está acima do peso considerado saudável para sua altura. O sobrepeso pode aumentar o risco de desenvolver doenças crônicas, como diabetes tipo 2, doenças cardiovasculares e hipertensão.";
        }

        elseif ($IMC < 34.9 ){
            $descricao = "Indica obesidade de grau leve. O excesso de peso nessa faixa aumenta significativamente o risco de problemas de saúde, incluindo doenças cardiovasculares, diabetes tipo 2 e alguns tipos de câncer.
            ";
        }

        elseif ($IMC < 39.9 ){
            $descricao = "Indica obesidade de grau moderado. O risco de complicações de saúde, como doenças cardiovasculares e diabetes, é ainda maior nessa faixa.";
        }

        else{
            $descricao = "Indica obesidade de grau grave. O risco de desenvolver problemas de saúde graves e potencialmente fatais, como doenças cardíacas, acidente vascular cerebral (AVC) e alguns tipos de câncer, é muito alto.
            ";
        }
        return $descricao ;
    }
}

?>
