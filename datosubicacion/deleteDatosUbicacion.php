<?php
include("connection.php");
$con = connection();

$UbicacionID = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM datosubicacion WHERE UbicacionID='$UbicacionID'"; // Cambiar la tabla a 'datosubicacion'
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarDatosUbicacion.php"); // Cambiar el nombre del archivo a donde redirige
} else {
    echo "Error al eliminar la ubicación: " . mysqli_error($con);
}
?>
