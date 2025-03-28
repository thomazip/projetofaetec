<?php

function pular2Linhas()
{
    $acao = "<br><br>";
    return $acao;
}

function escreverDataHoraCorrente()
{
    date_default_timezone_set("Europe/Monaco");
    $datahora = date('d/m/Y H:i');
    return $datahora;
}

function saudacao()
{
    date_default_timezone_set("Europe/Monaco");
    $hora = date('H');

    if ($hora < 12) {
        $mensagem = "Bom Dia!";
    } elseif ($hora < 18) {
        $mensagem = "Boa Tarde!";
    } else {
        $mensagem = "Boa noite!";
    }

    return $mensagem;
}

function diasFaltandoPara2025()
{
    date_default_timezone_set("Europe/Monaco");
    $dataAtual = date('Y-m-d');
    $data2025 = date('2025-01-01');

    $diferenca = strtotime($data2025) - strtotime($dataAtual);
    $diasFaltando = floor($diferenca / (60 * 60 * 24));
    return $diasFaltando;
}


function horaLocal($localizacao){
    // fuso horario dependendo da localização

    if ($localizacao == "rioDeJaneiro"){
        date_default_timezone_set("America/Sao_Paulo");

    } elseif ($localizacao == "monaco"){
        date_default_timezone_set("Europe/Monaco");

    } elseif ($localizacao == "kansas"){
        date_default_timezone_set("America/Chicago");

    } elseif ($localizacao == "seoul"){
        date_default_timezone_set("Asia/Seoul");
    }

    
    return date('d/m/Y H:i');
}

?>
