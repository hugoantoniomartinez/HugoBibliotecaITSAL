<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Biblioteca ITSAL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all">
</head>
<body>
    <br/>
    <div class="container">
        <h1 class="text-center bg-success text-light border border-success rounded" >LISTADO DE LIBROS</h1>
    </div>
    <br/>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Libro</th>
                <th scope="col">Autor</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require('conexion.php');

                    $sql = $conexion->query("SELECT * FROM libros");
                    $fila = $sql->fetchAll(PDO::FETCH_OBJ);

                    foreach ($fila as $row) {
                ?>

                <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                    <td><?php echo $row->nombre; ?></td>
                    <td><?php echo $row->autor; ?></td>
                    <td><?php echo $row->descripcion; ?></td>
                    <td >
                    <a href="editarForm.php?id=<?php echo $row->id; ?>" class="btn btn-warning">Editar</a>
                        <a href="eliminar.php?id=<?php echo $row->id; ?> name="alinkEliminar" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="agregarForm.php" class="btn btn-success">Agregar Libro</a>
    </div>
</body>
</html>
