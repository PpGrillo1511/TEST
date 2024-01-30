<?php
include "conexion.php";

$idVehiculo = $_POST['vehiculo'];
$idCajon = $_POST['cajon'];
$idTarifa = $_POST['tarifa'];
$idencargado = $_SESSION['id'];
date_default_timezone_set("America/Mexico_city");
$fechaIngreso = date("Y-m-d");
$horaIngreso = date("H:i:s");

$sql = "INSERT INTO registro (fechaIngreso, HoraIngreso, id_vehiculo, id_cajon, id_tarifa, id_encargado) VALUES ('$fechaIngreso', '$horaIngreso', '$idVehiculo', '$idCajon', '$idTarifa' , '$id_encargado')";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Registro de horas realizado correctamente";
} else {
    echo "Error, no se registró correctamente el registro de horas: " . mysqli_error($conexion);
}
?>
