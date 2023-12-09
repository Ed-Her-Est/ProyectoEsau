<?php
include('connection.php');
$con = connection();

$PaqueteID = $_POST["id"]; // Cambia el nombre de la variable a algo más genérico
$tipoPaquete = $_POST['tipoPaquete'];

$sql = "UPDATE paquetesmusicales SET tipoPaquete='$tipoPaquete' WHERE PaqueteID='$PaqueteID'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: mostrarPaquetesMusicales.php"); // Cambia el nombre del archivo a donde redirige
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
