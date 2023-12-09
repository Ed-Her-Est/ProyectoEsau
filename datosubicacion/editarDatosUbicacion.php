<?php
include('connection.php');
$con = connection();

$UbicacionID = $_POST["id"];  // Cambiado a id de ubicación según el formulario
$Localidad = $_POST['Localidad'];  // Ajustar el nombre del campo según el formulario
$Municipio = $_POST['Municipio'];  // Ajustar el nombre del campo según el formulario
$EstadoFederativo = $_POST['EstadoFederativo'];  // Ajustar el nombre del campo según el formulario
$DiaEvento = $_POST['DiaEvento'];  // Ajustar el nombre del campo según el formulario
$HoraEvento = $_POST['HoraEvento'];  // Ajustar el nombre del campo según el formulario

$sql = "UPDATE datosubicacion SET Localidad='$Localidad', Municipio='$Municipio', EstadoFederativo='$EstadoFederativo', DiaEvento='$DiaEvento', HoraEvento='$HoraEvento' WHERE UbicacionID='$UbicacionID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarDatosUbicacion.php");  // Ajustar el nombre del archivo de visualización
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
