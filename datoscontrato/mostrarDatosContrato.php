<?php 
include('connection.php');
   
$con = connection();
$sql = "SELECT * FROM datoscontrato"; // Cambiar la tabla a 'datoscontrato'
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       </style>
</head>

<body class="bg-light">
    

    <div class="container mt-5">
        <div class="mb-4">
            <h1>Crear Contrato</h1>
            <form action="insertarDatosContrato.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="ClienteID">Cliente ID</label>
                        <input type="text" class="form-control" name="ClienteID" placeholder="Cliente ID" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="UbicacionID">Ubicación ID</label>
                        <input type="text" class="form-control" name="UbicacionID" placeholder="Ubicación ID" required value="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="FechaContrato">Fecha de Contrato</label>
                        <input type="date" class="form-control" name="FechaContrato" placeholder="Fecha de Contrato" value="">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Agregar Contrato</button>
            </form>
        </div>

        <div>
            <h2>Contratos Registrados</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Cliente ID</th>
                        <th>Ubicación ID</th>
                        <th>Fecha de Contrato</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contenido de la tabla -->
                    <?php while ($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <td><?= $row['ContratoID'] ?></td>
                            <td><?= $row['ClienteID'] ?></td>
                            <td><?= $row['UbicacionID'] ?></td>
                            <td><?= $row['FechaContrato'] ?></td>
                            <td>
                                <!-- Enlace para editar -->
                                <a class="btn btn-warning" href="updateDatosContrato.php?id=<?= $row['ContratoID'] ?>">Editar</a>
                            </td>
                            <td>
                                <!-- Formulario para eliminar -->
                                <a class="btn btn-danger" href="deleteDatosContrato.php?id=<?= $row['ContratoID'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody><a class="btn btn-success" href="respaldarDatosContrato.php">Descargar Datos</a>
            </table>
           
        </div>
    </div>

    <!-- Scripts de Bootstrap y otros -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
