<?php
include 'cabecalho.html';
?>
    <main role="main" class="container">

      <div class="starter-template">
        <h1>Curso de PHP 2024 - 01</h1>
        <div class="box">
        <div class="aluno">
    <div class="form-group">
        <label for="nome">Nome Aluno(a):</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div class="form-group">
        <label for="nota1">Nota 1:</label>
        <input type="text" class="n1" name="nota1" id="nota1">
    </div>
    <div class="form-group">
        <label for="nota2">Nota 2:</label>
        <input type="text" class="n1" name="nota2" id="nota2">
    </div>
</div>


        <div class="calcular">
            <button id="calcular" class="botao_aluno">Calcular  média e verificar situação</button>
        </div>
        <div id="resultado_aluno"></div>
    </div>        <h4>Aluno : Fernando Thomaz</h4>
      </div>

    </main>
    <!-- /.container -->
<?php
include 'rodape.html';
?>
