<?php
include("POO.php");

//crea un objeto de las clases (variables)

$ajiaco = new POO(); //llamar al contructor

//acceder a un atributo
$ajiaco->cantidadAgua="7 litros";
echo($ajiaco->cantidadAgua);
echo("<br>");
echo($ajiaco->disfrutarSopa());



?>