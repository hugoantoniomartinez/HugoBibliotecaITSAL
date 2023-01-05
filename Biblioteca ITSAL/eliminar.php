<?php
require('conexion.php');

$id = $_GET['id'];

$sql = $conexion->prepare("DELETE FROM libros WHERE id = ?;");
$resultado = $sql->execute([$id]);

if($resultado) {
    header('Location:index.php');
    echo "Libro Eliminado";
}

?>
