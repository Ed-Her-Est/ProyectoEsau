<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM datosubicacion";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Agregar estilos personalizados aquí si es necesario */
    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <!-- ... (código de la barra de navegación) ... -->

    <div class="container mt-5">
        <div class="mb-4">
            <h1>Crear Datos de Ubicación</h1>
            <form action="insertarDatosUbicacion.php" method="POST">
                <!-- Cambios en los nombres de los campos y eliminación de campos no necesarios -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Localidad">Localidad</label>
                        <input type="text" class="form-control" name="Localidad" placeholder="Localidad" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Municipio">Municipio</label>
                        <input type="text" class="form-control" name="Municipio" placeholder="Municipio" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="EstadoFederativo">Estado Federativo</label>
                        <input type="text" class="form-control" name="EstadoFederativo" placeholder="Estado Federativo" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="DiaEvento">Día del Evento</label>
                        <input type="text" class="form-control" name="DiaEvento" placeholder="Día del Evento" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="HoraEvento">Hora del Evento</label>
                        <input type="text" class="form-control" name="HoraEvento" placeholder="Hora del Evento" required value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Datos de Ubicación</button>
            </form>
        </div>

        <div>
            <h2>Datos de Ubicación Registrados</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Localidad</th>
                        <th>Municipio</th>
                        <th>Estado Federativo</th>
                        <th>Día del Evento</th>
                        <th>Hora del Evento</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['UbicacionID'] ?></td>
                            <td><?= ucwords($row['Localidad']) ?></td>
                            <td><?= ucwords($row['Municipio']) ?></td>
                            <td><?= ucwords($row['EstadoFederativo']) ?></td>
                            <td><?= $row['DiaEvento'] ?></td>
                            <td><?= $row['HoraEvento'] ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateDatosUbicacion.php?id=<?= $row['UbicacionID'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteDatosUbicacion.php?id=<?= $row['UbicacionID'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a class="btn btn-success" href="respaldarDatosUbicacion.php">Descargar Datos</a>
       
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
