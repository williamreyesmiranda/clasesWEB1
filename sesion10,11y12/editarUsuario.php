<?php 

include("BaseDatos.php");

//1.recibo el id que voy a eliminar por URL (GET)

if(isset($_POST['btnEditar'])){
    $idEditar=($_GET['id']);
    $nombre=$_POST['nombreEditar'];
    $desc=$_POST['descEditar'];
   
}

//2. crear un objeto
$transaccion= new BaseDatos();
//3. Crear la consulta
$consultaSQL=("UPDATE usuarios SET nombre='$nombre', descripcion='$desc' WHERE idUsuario='$idEditar'");

//4. Utilizar el metodo para eliminar datos
$transaccion->editarDatos($consultaSQL);
?>