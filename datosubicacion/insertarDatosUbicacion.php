<?php
include('connection.php'); 
$con = connection();

$UbicacionID = null;
$Localidad = $_POST['Localidad']; // Ajusta el nombre del campo según el formulario
$Municipio = $_POST['Municipio']; // Ajusta el nombre del campo según el formulario
$EstadoFederativo = $_POST['EstadoFederativo']; // Ajusta el nombre del campo según el formulario
$DiaEvento = $_POST['DiaEvento']; // Ajusta el nombre del campo según el formulario
$HoraEvento = $_POST['HoraEvento']; // Ajusta el nombre del campo según el formulario

$sql = "INSERT INTO datosubicacion (UbicacionID, Localidad, Municipio, EstadoFederativo, DiaEvento, HoraEvento) 
        VALUES ('$UbicacionID', '$Localidad', '$Municipio', '$EstadoFederativo', '$DiaEvento', '$HoraEvento')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarDatosUbicacion.php"); // Ajusta el nombre del archivo de visualización
    exit(); // Detener la ejecución después de la redirección
} else {
    echo "Error al insertar datos de ubicación: " . mysqli_error($con);
}
?>
