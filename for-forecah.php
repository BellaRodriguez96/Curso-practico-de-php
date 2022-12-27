<?php
#Declaracion de array
echo "Uso de While\n";
$arr=array(1,2,3,4,5);
#Recorrer el array
for($i=0; $i<4; $i++){
    #Por cada iteracion muestra el valor
    echo $arr[$i];
    echo "\n";
}
#=================================================
#USO DE DO-WHILE
echo "Uso de Do-While\n";
$arr=array(1,2,3,4,5);
foreach($arr as $value){
    echo $value;
    echo "\n";
}
?>