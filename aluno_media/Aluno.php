<?php

class Aluno {
    public function calcularMedia($nota1,$nota2){
        $media = ($nota1 + $nota2) / 2;
        return $media;
    }
    public function verificarSituacao($media){
        if ($media >= 7) {
            $situacao = "APROVADO";
        }
        else {
            $situacao = "REPROVADO";
        }
        return $situacao;
    }
}


?>