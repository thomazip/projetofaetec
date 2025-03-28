<?php
include 'cabecalho.html';
?>
    <main role="main" class="container">

      <div class="starter-template">
        <h1>Curso de PHP 2024 - 01</h1>
        <h1>Escolha a jogada :</h1>
    <div>
        
        <div class="div-1">
            <label>
              <input type="radio" name="jogada" class="jogada"  value="Pedra">
              <img src="Jokempo/images/Pedra.png">
            </label>
        </div>
        <div class="div-2">
            <label>
              <input type="radio" name="jogada" class="jogada" value="Papel">
              <img src="Jokempo/images/Papel.png">
            </label>
        </div>
        <div class="div-3">
            <label>
              <input type="radio" name="jogada" class="jogada"  value="Tesoura">
              <img src="Jokempo/images/Tesoura.png">
            </label>
        </div>

    </div>

    <hr>

    <div id="msg_jokempo"></div>
            <h4>Aluno : Fernando Thomaz</h4>
      </div>

    </main>
    <!-- /.container -->
<?php
include 'rodape.html';
?>
