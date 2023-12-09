<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM paquetesmusicales"; // Cambio en la consulta SQL
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
            <h1>Crear Paquete Musical</h1>
            <form action="insertarPaquetesMusicales.php" method="POST"> <!-- Cambio en el nombre del archivo de destino -->
                <!-- Cambios en los nombres de los campos y eliminación de campos no necesarios -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="tipoPaquete">Tipo de Paquete</label> <!-- Cambio en el nombre del campo -->
                        <input type="text" class="form-control" name="tipoPaquete" placeholder="Tipo de Paquete" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="created_at">Fecha de Creación</label> <!-- Cambio en el nombre del campo -->
                        <input type="datetime-local" class="form-control" name="created_at" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Paquete Musical</button>
            </form>
        </div>

        <div>
            <h2>Paquetes Musicales Registrados</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Tipo de Paquete</th> <!-- Cambio en el nombre de la columna -->
                        <th>Fecha de Creación</th> <!-- Cambio en el nombre de la columna -->
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['PaqueteID'] ?></td> <!-- Cambio en el nombre del campo -->
                            <td><?= ucwords($row['tipoPaquete']) ?></td> <!-- Cambio en el nombre del campo -->
                            <td><?= $row['created_at'] ?></td> <!-- Cambio en el nombre del campo -->
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updatePaquetesMusicales.php?id=<?= $row['PaqueteID'] ?>">Editar</a> <!-- Cambio en el nombre del archivo -->
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deletePaquetesMusicales.php?id=<?= $row['PaqueteID'] ?>">Eliminar</a> <!-- Cambio en el nombre del archivo -->
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            
            <a class="btn btn-success" href="respaldarPaquetesMusicales.php">Descargar Datos</a>
       
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
