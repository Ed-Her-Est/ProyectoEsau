<?php
include('connection.php'); 
$con = connection();

$ClienteID = null;
$nombre = $_POST['nombre']; 
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];


$sql = "INSERT INTO cliente (ClienteID, nombre, apellidoPaterno, apellidoMaterno) 
        VALUES ('$ClienteID', '$nombre', '$apellidoPaterno', '$apellidoMaterno')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarCliente.php");
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar cliente: " . mysqli_error($con);
}
?>
