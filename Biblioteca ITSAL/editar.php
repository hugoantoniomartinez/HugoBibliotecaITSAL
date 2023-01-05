<?php

require('conexion.php');

$id = $_POST['idHidden'];
$nombreLibro = $_POST['txtNombreLibro'];
$autorLibro = $_POST['txtAutorLibro'];
$descripcionLibro = $_POST['txtDescripcionLibro'];

$sql = $conexion->prepare("UPDATE libros SET nombre=?, autor=?, descripcion=? WHERE id=?");

$resultado = $sql->execute([$nombreLibro,$autorLibro,$descripcionLibro,$id]);

if($resultado === TRUE) {
    header('Location:index.php');
} else {
    echo "Algo Salio Mal...";
}


?>
