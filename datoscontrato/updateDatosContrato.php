<?php
include("connection.php");
$con = connection();

$ContratoID = $_GET['id']; // Cambia el nombre del parámetro

$sql = "SELECT * FROM datoscontrato WHERE ContratoID='$ContratoID'"; // Cambia la tabla a 'datoscontrato'
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Contrato</title>
    <!-- Agrega enlaces a Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .contrato-form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contrato-form input {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="contrato-form">
            <h2 class="mb-4">Editar Contrato</h2>
            <form action="editarDatosContrato.php" method="POST"> <!-- Cambia el nombre del archivo de destino -->
                <input type="hidden" name="id" value="<?= $row['ContratoID'] ?>"> <!-- Cambia el nombre del campo de ID -->
                <div class="form-group">
                    <label for="ClienteID">ID del Cliente</label>
                    <input type="text" class="form-control" name="ClienteID" placeholder="ID del Cliente" value="<?= $row['ClienteID'] ?>">
                </div>
                <div class="form-group">
                    <label for="UbicacionID">ID de Ubicación</label>
                    <input type="text" class="form-control" name="UbicacionID" placeholder="ID de Ubicación" value="<?= $row['UbicacionID'] ?>">
                </div>
                <div class="form-group">
                    <label for="FechaContrato">Fecha del Contrato</label>
                    <input type="date" class="form-control" name="FechaContrato" value="<?= $row['FechaContrato'] ?>">
                </div>
                <!-- Puedes agregar más campos según la estructura de tu tabla 'datoscontrato' -->
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
