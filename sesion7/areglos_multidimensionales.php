<?php
//indexados
//Cada areglo tiene otros arreglos
$productos=array(
    array("arroz",1600, "caribe"),
    array("aceite", 5600,"Premier"),
    array("sal",1000,"Refisal"),

);
print_r($productos);
echo($productos[0][0]);

//recorrido
foreach($productos as $valores){
    echo("<br>");
    echo($valores[0]);
    echo("<br>");echo("<br>");
}

//asociativos
$productos=array(
    "producto1"=>array("arroz",1600, "caribe"),
    "producto2"=>array("aceite", 5600,"Premier"),
    "producto3"=>array("sal",1000,"Refisal"),

);
print_r($productos);
echo($productos[0][0]);

//recorrido
foreach($productos as $valores){
    echo("<br>");
    echo($valores[0]);
    
}
?>