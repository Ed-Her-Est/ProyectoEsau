<?php
include("connection.php");
$con = connection();

$paqueteID = $_GET['id']; // Cambia el nombre del parámetro

$sql = "SELECT * FROM paquetesmusicales WHERE PaqueteID='$paqueteID'"; // Cambia la tabla a 'paquetesmusicales'
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Paquete Musical</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .paquete-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .paquete-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="paquete-form">
            <h2 class="mb-4">Editar Paquete Musical</h2>
            <form action="editarPaquetesMusicales.php" method="POST"> <!-- Cambia el nombre del archivo de destino -->
                <input type="hidden" name="id" value="<?= $row['PaqueteID'] ?>"> <!-- Cambia el nombre del campo de ID -->
                <div class="form-group">
                    <label for="tipoPaquete">Tipo de Paquete</label>
                    <input type="text" class="form-control" name="tipoPaquete" placeholder="Tipo de Paquete" value="<?= $row['tipoPaquete'] ?>">
                </div>
                <div class="form-group">
                    <label for="created_at">Fecha de Creación</label>
                    <input type="text" class="form-control" name="created_at" placeholder="YYYY-MM-DD HH:MM:SS" value="<?= $row['created_at'] ?>">
                </div>
                <!-- Puedes agregar más campos según la estructura de tu tabla 'paquetesmusicales' -->
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
