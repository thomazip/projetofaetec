<?php
class Conexao {
    public function conectarBanco(){
        $con = mysqli_connect("localhost","root","usbw","php202401n1")
        or die ("Não foi possível conectar!");
    
    return $con;
    }
}
?>