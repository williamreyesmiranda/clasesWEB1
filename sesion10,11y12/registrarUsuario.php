<?php 
include "BaseDatos.php";
if(isset($_POST['botonEnvio'])){
    //recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $descripcion=$_POST['descripcion'];
    $genero=$_POST['genero'];
    $img=$_POST['img'];

    //copia u objeto de clase BD
    $transaccion= new BaseDatos();
    
    //crear consulta
    $consultaSQL="INSERT INTO usuarios(nombre, apellido, descripcion, genero, imagen) VALUES ('$nombre','$apellido','$descripcion','$genero', '$img')";

    //llamo al metodo de la clase BD agregar datos()
    $transaccion->agregarDatos($consultaSQL);
    }
