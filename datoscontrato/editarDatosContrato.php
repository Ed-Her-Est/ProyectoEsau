<?php
include('connection.php');
$con = connection();

$ContratoID = $_POST["id"]; 
$ClienteID = $_POST['ClienteID']; 
$UbicacionID = $_POST['UbicacionID'];
$FechaContrato = $_POST['FechaContrato']; 

$sql = "UPDATE datoscontrato SET ClienteID='$ClienteID', UbicacionID='$UbicacionID', FechaContrato='$FechaContrato' WHERE ContratoID='$ContratoID'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: mostrarDatosContrato.php"); 
    exit(); 
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
