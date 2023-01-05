<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>AgregarForm - Biblioteca ITSAL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all">
</head>
<body>
    <br/>
    <div class="container">
        <h1 class="text-center bg-success text-light border border-success rounded" >AGREGAR LIBROS</h1>
    </div>
    <br/>
    <div class="container">

        <form action="agregar.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del Libro</label>
                <input type="text" class="form-control" name="txtNombreLibro">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Autor</label>
                <input type="text" class="form-control" name="txtAutorLibro">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="txtDescripcionLibro">
            </div>
            <a class="btn btn-dark" href="index.php" role="button">Regresar</a>
            <button type="submit" class="btn btn-success" name="sbmtEnviar" >Enviar</button>
        </form>
    </div>
</body>
</html>
