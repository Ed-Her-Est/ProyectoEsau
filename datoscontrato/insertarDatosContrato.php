<?php
include('connection.php'); 
$con = connection();

$ContratoID = null;
$ClienteID = $_POST['ClienteID'];         
$UbicacionID = $_POST['UbicacionID'];     
$FechaContrato = $_POST['FechaContrato']; 

$sql = "INSERT INTO datoscontrato (ContratoID, ClienteID, UbicacionID, FechaContrato) 
        VALUES ('$ContratoID', '$ClienteID', '$UbicacionID', '$FechaContrato')";

$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarDatosContrato.php"); 
    exit(); 
} else {
    echo "Error al insertar datos de contrato: " . mysqli_error($con);
}
?>
