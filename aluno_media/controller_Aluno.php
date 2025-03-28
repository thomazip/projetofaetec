<?php
    include  "aluno.php";

    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nome = $_POST["nome"];

    $aluno = new Aluno();
    $media = $aluno -> calcularMedia($nota1,$nota2);
    $situacao = $aluno -> verificarSituacao($media);

    echo "<h2> Nome : ". $nome."</h2>";
    echo "<h2> Média : ". $media."</h2>";
    echo "<h2> Situação : ". $situacao."</h2>";



?>