<?php
include 'cabecalho.html';
?>
    <main role="main" class="container">

      <div class="starter-template">
        <h1>Curso de PHP 2024 - 01</h1>
        <br>
        <h1>Calculadora</h1>
        <br>

    <div class="form">
        <form>
            <input name="valor1" id="valor1" type="text" size="5" value="" />
    
                <label id="somar">
                    <input type="radio" name="operador" class="op" id="somar" value="soma" /> + 
                </label>
                
                <label id="subtrair">
                    <input type="radio" name="operador" class="op" id="subtrair" value="subtracao" /> - 
                </label>
    
                <label id="multiplicar">
                    <input type="radio" name="operador" class="op" id="multiplicar" value="multiplicacao" /> * 
                </label>
    
                <label id="dividir">
                    <input type="radio" name="operador" class="op" id="dividir" value="divisao" /> /    
                </label>
                
                <input name="valor2" id="valor2" type="text" size="5" value="" />
                
                <!-- <button id="botao_calcular"> Calcular </button> -->
        </form>
    </div>
    <br><br>
    <div id="resultado"></div>
      </div>

    </main>
    <!-- /.container -->
<?php
include 'rodape.html';
?>
