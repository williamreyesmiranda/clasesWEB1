<?php
class POO {//es recomendable que el mismo nombre de la clase sea el mismo del archivo
   
    //primero que se llaman son los atributos que son variables
public $cantidadAgua;
public $cantidadAceite;
public $cantidadCubosSabor;

//constructor (funcion especial)
public function __construct(){

}

//Métodos son acciones que puede hacer mi clase (funciones)
public function prepararSopa(){
echo ("Revuelva los ingredientes y deje cocinar por 20 minutos");
}

public function disfrutarSopa(){
    echo("deje enfriar y difrute");
}
}
?>