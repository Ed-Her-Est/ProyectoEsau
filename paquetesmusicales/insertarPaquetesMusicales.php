<?php
include('connection.php'); 
$con = connection();

$tipoPaquete = $_POST['tipoPaquete']; // Ajustar el nombre del campo según el formulario
$created_at = date('Y-m-d H:i:s'); // Obtener la fecha y hora actual

$sql = "INSERT INTO paquetesmusicales (tipoPaquete, created_at) 
        VALUES ('$tipoPaquete', '$created_at')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarPaquetesMusicales.php"); // Ajustar el nombre del archivo de visualización
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar paquete musical: " . mysqli_error($con);
}
?>

