<?php
include('connection.php');
$con = connection();

$PublicidadID = $_POST["id"]; // Cambia el nombre del campo según tu formulario

$NombreAnfitrion = $_POST['NombreAnfitrion'];
$MotivoEvento = $_POST['MotivoEvento'];
$LugarPopular = $_POST['LugarPopular'];

$sql = "UPDATE datospublicidad SET NombreAnfitrion='$NombreAnfitrion', MotivoEvento='$MotivoEvento', LugarPopular='$LugarPopular' WHERE PublicidadID='$PublicidadID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarDatosPublicidad.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
