<?php
include("connection.php");
$con = connection();

$PublicidadID = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM datospublicidad WHERE PublicidadID='$PublicidadID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarDatosPublicidad.php"); // Cambiar el nombre del archivo a donde redirige
} else {
    echo "Error al eliminar los datos de publicidad: " . mysqli_error($con);
}
?>
