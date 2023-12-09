<?php
include("connection.php");
$con = connection();

$PublicidadID = $_GET['id']; // Cambia el nombre del parámetro

$sql = "SELECT * FROM datospublicidad WHERE PublicidadID='$PublicidadID'"; // Cambia la tabla a 'datospublicidad'
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Datos de Publicidad</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .publicidad-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .publicidad-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="publicidad-form">
            <h2 class="mb-4">Editar Datos de Publicidad</h2>
            <form action="editarDatosPublicidad.php" method="POST"> <!-- Cambia el nombre del archivo de destino -->
                <input type="hidden" name="id" value="<?= $row['PublicidadID'] ?>"> <!-- Cambia el nombre del campo de ID -->
                <div class="form-group">
                    <label for="ContratoID">ID de Contrato</label>
                    <input type="text" class="form-control" name="ContratoID" placeholder="ID de Contrato" value="<?= $row['ContratoID'] ?>">
                </div>
                <div class="form-group">
                    <label for="NombreAnfitrion">Nombre del Anfitrión</label>
                    <input type="text" class="form-control" name="NombreAnfitrion" placeholder="Nombre del Anfitrión" value="<?= $row['NombreAnfitrion'] ?>">
                </div>
                <div class="form-group">
                    <label for="MotivoEvento">Motivo del Evento</label>
                    <input type="text" class="form-control" name="MotivoEvento" placeholder="Motivo del Evento" value="<?= $row['MotivoEvento'] ?>">
                </div>
                <div class="form-group">
                    <label for="LugarPopular">Lugar Popular</label>
                    <input type="text" class="form-control" name="LugarPopular" placeholder="Lugar Popular" value="<?= $row['LugarPopular'] ?>">
                </div>
                <!-- Puedes agregar más campos según la estructura de tu tabla 'datospublicidad' -->
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
