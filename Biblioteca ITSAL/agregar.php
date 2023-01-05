<?php

include('conexion.php');

$nombreLibro = $_POST['txtNombreLibro'];
$autorLibro = $_POST['txtAutorLibro'];
$descripcionLibro = $_POST['txtDescripcionLibro'];


if(isset($_POST['sbmtEnviar'])) {

    $sql = $conexion->prepare("INSERT INTO libros (nombre,autor,descripcion) VALUE (?,?,?)");
    $resultado = $sql->execute([$nombreLibro,$autorLibro,$descripcionLibro]);

    if($resultado) {
        echo "Libro Registrado";
    } else {
        echo "No se registro el libro";
    }

    header("Location:index.php");
    exit;
}

?>
