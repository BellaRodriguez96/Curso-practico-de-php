<?php
#Declaracion de variables de entrada
$Edades=array(1,9,3,6,5,6,7,8,10,10,6,5,20,25, 2,3);

#Proceso
for($i=0; $i<count($Edades); $i++){
    if($Edades[$i]<5){
        echo "\nEl estudiante con ".$Edades[$i]." años tendra sus juguetes en la parte inferior de la bodega";
    }elseif($Edades[$i]>=5 && $Edades[$i]<=7){
        echo "\nEl estudiante con ".$Edades[$i]." años tendra sus juguetes en la parte media de la bodega";
    }
    elseif($Edades[$i]>7){
        echo "\nEl estudiante con ".$Edades[$i]." años tendra sus juguetes en la parte alta de la bodega";
    }

}
echo "\n";
echo "\nSi la edad no esta registrada el estudiante guardara sus juguetes en la bodega de al lado\n";
?>