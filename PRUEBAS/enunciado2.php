<?php
#Variable de entrada
$altura=20;
#Funcion que dibuja medio arbol de navidad

function dibujar($altura){
    $asterisco='';
    for($i=1; $i<=$altura; $i++){
        $asterisco.='*';
        echo $asterisco."\n";
   }
}
dibujar($altura);

?>