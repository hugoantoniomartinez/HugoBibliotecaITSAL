<?php

require('conexion.php');

$id = $_GET['id'];

$sql = $conexion->prepare("SELECT * FROM libros WHERE id=?");
$sql->execute([$id]);

$fila = $sql->fetch(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>EditarForm - Biblioteca ITSAL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all">
</head>
<body>
    <br/>
    <div class="container">
        <h1 class="text-center bg-success text-light border border-success rounded" >EDITAR LIBROS</h1>
    </div>
    <br/>
    <div class="container">
        <form action="editar.php" method="POST">
            <input type="hidden" class="form-control" name="idHidden" value="<?php echo $fila->id; ?>" >
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del Libro</label>
                <input type="text" class="form-control" name="txtNombreLibro" value="<?php echo $fila->nombre; ?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Autor</label>
                <input type="text" class="form-control" name="txtAutorLibro" value="<?php echo $fila->autor; ?>" >
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="txtDescripcionLibro" value="<?php echo $fila->descripcion; ?>" >
            </div>
            <a class="btn btn-dark" href="index.php" role="button">Regresar</a>
            <button type="submit" class="btn btn-success" name="sbmtEnviar" >Enviar</button>
        </form>
    </div>
</body>
</html>
