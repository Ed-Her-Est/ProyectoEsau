<?php
include('connection.php');
$con = connection();

$ClienteID = $_POST["id"];  
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];


$sql = "UPDATE cliente SET nombre='$nombre', apellidoPaterno='$apellidoPaterno', apellidoMaterno='$apellidoMaterno' WHERE ClienteID='$ClienteID'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: mostrarCliente.php");
    exit(); // Añadido para evitar que el script continúe después de la redirección
} else {
    echo "Error en la actualización: " . mysqli_error($con);
}
?>
