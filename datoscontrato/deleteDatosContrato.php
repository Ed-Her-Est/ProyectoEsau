<?php
include("connection.php");
$con = connection();

$clienteID = $_GET["id"]; 
$sqlContratos = "DELETE FROM datoscontrato WHERE ClienteID='$clienteID'";
$queryContratos = mysqli_query($con, $sqlContratos);


$sqlCliente = "DELETE FROM cliente WHERE ClienteID='$clienteID'";
$queryCliente = mysqli_query($con, $sqlCliente);

if ($queryCliente && $queryContratos) {
    header("Location: mostrarDatosContrato.php"); // Cambiar el nombre del archivo a donde redirige
    exit();
} else {
    echo "Error al eliminar el cliente y sus contratos: " . mysqli_error($con);
}
?>
