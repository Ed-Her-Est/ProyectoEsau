<?php
include("connection.php");
$con = connection();

$clienteID = $_GET["id"]; // Cambiar el nombre de la variable a algo más genérico

$sql = "DELETE FROM cliente WHERE ClienteID='$clienteID'";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: mostrarCliente.php"); // Cambiar el nombre del archivo a donde redirige
} else {
    echo "Error al eliminar el cliente: " . mysqli_error($con);
}
?>
