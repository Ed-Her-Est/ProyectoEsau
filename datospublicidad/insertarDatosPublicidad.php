<?php
include('connection.php'); 
$con = connection();

$PublicidadID = null;
$ContratoID = null; // Ajusta el nombre del campo según el formulario
$NombreAnfitrion = $_POST['NombreAnfitrion']; // Ajusta el nombre del campo según el formulario
$MotivoEvento = $_POST['MotivoEvento']; // Ajusta el nombre del campo según el formulario
$LugarPopular = $_POST['LugarPopular']; // Ajusta el nombre del campo según el formulario
$created_at = date('Y-m-d H:i:s'); // Obtén la fecha y hora actual

$sql = "INSERT INTO datospublicidad ( NombreAnfitrion, MotivoEvento, LugarPopular, created_at) 
        VALUES ('$NombreAnfitrion', '$MotivoEvento', '$LugarPopular', '$created_at')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarDatosPublicidad.php"); // Ajusta el nombre del archivo de visualización
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar datos de publicidad: " . mysqli_error($con);
}
?>
