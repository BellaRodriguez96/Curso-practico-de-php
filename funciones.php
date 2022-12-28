<?php
echo "\nFUNCION QUE CONCATENA LOS NOMBRES\n";
#Declaracion de funcion que concatena los nombres
function concatenar($nombre, $apellido){
    echo $nombre.' '.$apellido;
}

#Llamando a la funcion y pasandole los parametros
concatenar("Bella", "Rodriguez");
#===========================================
echo "\n\nFUNCION QUE SUMA DOS NUMEROS\n";

#Array que contiene los numeros a sumar
$numeros=array(1,2,3,4);

#Funcion para sumar
function sumar($numeros){
    #Variable que se inicializa en 0 para que sume el array
    $suma=0;
    #Ciclo for que recorre el array y suma los numeros
    for($i=0; $i<4; $i++){
        $suma=$suma + $numeros[$i];
    }
    echo "La suma de los valores del array es: ".$suma;
}
#Llamando a la funcion
sumar($numeros);

?>