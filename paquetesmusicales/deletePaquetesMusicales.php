<?php
include("connection.php");
$con = connection();

$paqueteID = $_GET["id"]; // Cambia el nombre de la variable a algo más genérico

$sql = "DELETE FROM paquetesmusicales WHERE PaqueteID='$paqueteID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarPaquetesMusicales.php"); // Cambia el nombre del archivo a donde redirige
} else {
    echo "Error al eliminar el paquete musical: " . mysqli_error($con);
}
?>
