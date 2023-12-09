<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM datospublicidad"; // Cambia el nombre de la tabla a 'datospublicidad'
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
            <h1>Crear Datos de Publicidad</h1>
            <form action="insertarDatosPublicidad.php" method="POST"> <!-- Cambia el nombre del archivo de inserción -->
                <!-- Cambios en los nombres de los campos y eliminación de campos no necesarios -->
                <div class="form-row">
                <div class="form-group col-md-4">
                        <label for="ContratoID">Nombre del Anfitrión</label>
                        <input type="text" class="form-control" name="ContratoID" placeholder="ID Contrato" required value="">
                    </div>    
                <div class="form-group col-md-4">
                        <label for="NombreAnfitrion">Nombre del Anfitrión</label>
                        <input type="text" class="form-control" name="NombreAnfitrion" placeholder="Nombre del Anfitrión" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="MotivoEvento">Motivo del Evento</label>
                        <input type="text" class="form-control" name="MotivoEvento" placeholder="Motivo del Evento" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="LugarPopular">Lugar Popular</label>
                        <input type="text" class="form-control" name="LugarPopular" placeholder="Lugar Popular" value="">
                    </div>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Datos de Publicidad</button>
            </form>
        </div>

        <div>
            <h2>Datos de Publicidad Registrados</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID Publicidad</th>
                        <th>ID Contrato</th>
                        <th>Nombre del Anfitrión</th>
                        <th>Motivo del Evento</th>
                        <th>Lugar Popular</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['PublicidadID'] ?></td>
                            <td><?= $row['ContratoID'] ?></td>
                            <td><?= ucwords($row['NombreAnfitrion']) ?></td>
                            <td><?= ucwords($row['MotivoEvento']) ?></td>
                            <td><?= ucwords($row['LugarPopular']) ?></td>
                            
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateDatosPublicidad.php?id=<?= $row['PublicidadID'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteDatosPublicidad.php?id=<?= $row['PublicidadID'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <a class="btn btn-success" href="respaldarDatosPublicidad.php">Descargar Datos</a>
       
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
