<?php 
//arreglos indexados
echo" Arreglos Indexados.<br>";
$producto=array("arroz","atun","apio","pollo");
//para mostrar todo el arreglo
print_r ($producto);

//para mostrar un solo elemento
echo"<br>";
echo($producto[1]);
echo" <br><br><br>Arreglos Asociativos.<br>";

//arreglos asociativos
                        //clave --   --valor
$productoAsociativo=array('producto1'=>"arroz", 'producto2'=>"atun",'producto3'=>"apio",'producto4'=>"pollo");
print_r($productoAsociativo);
echo"<br>";
echo($productoAsociativo["producto2"]);

//arreglos de numeros con for
echo" <br><br><br>Arreglos de números.con for <br>";

$numeros=array(1,2,3,4,5,6,7,8,9,10);

//ciclo for
for($i=0;$i<count($numeros);$i++){
echo $numeros[$i];
echo"<br>";


}

//arreglos de numeros con foreach
echo" <br><br><br>Arreglos de números.con foreach <br>";
foreach($numeros as $valor){
echo($valor);
echo"<br>";
}