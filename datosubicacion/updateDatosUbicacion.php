<?php
include("connection.php");
$con = connection();

$UbicacionID = $_GET['id']; // Cambia el nombre del parámetro

$sql = "SELECT * FROM datosubicacion WHERE UbicacionID='$UbicacionID'"; // Cambia la tabla a 'datosubicacion'
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Ubicación</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .ubicacion-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .ubicacion-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="ubicacion-form">
            <h2 class="mb-4">Editar Ubicación</h2>
            <form action="editarDatosUbicacion.php" method="POST"> <!-- Cambia el nombre del archivo de destino -->
                <input type="hidden" name="id" value="<?= $row['UbicacionID'] ?>"> <!-- Cambia el nombre del campo de ID -->
                <div class="form-group">
                    <label for="Localidad">Localidad</label>
                    <input type="text" class="form-control" name="Localidad" placeholder="Localidad" value="<?= $row['Localidad'] ?>">
                </div>
                <div class="form-group">
                    <label for="Municipio">Municipio</label>
                    <input type="text" class="form-control" name="Municipio" placeholder="Municipio" value="<?= $row['Municipio'] ?>">
                </div>
                <div class="form-group">
                    <label for="EstadoFederativo">Estado Federativo</label>
                    <input type="text" class="form-control" name="EstadoFederativo" placeholder="Estado Federativo" value="<?= $row['EstadoFederativo'] ?>">
                </div>
                <div class="form-group">
                    <label for="DiaEvento">Día del Evento</label>
                    <input type="text" class="form-control" name="DiaEvento" placeholder="Día del Evento" value="<?= $row['DiaEvento'] ?>">
                </div>
                <div class="form-group">
                    <label for="HoraEvento">Hora del Evento</label>
                    <input type="text" class="form-control" name="HoraEvento" placeholder="Hora del Evento" value="<?= $row['HoraEvento'] ?>">
                </div>
                <!-- Puedes agregar más campos según la estructura de tu tabla 'datosubicacion' -->
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Actualizar">
                </div>
            </form>
        </div>
    </div>

    <!-- Agrega scripts de Bootstrap y otros que puedas necesitar -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
