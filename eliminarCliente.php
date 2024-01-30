<?php
include "conexion.php";

$idCliente =$_POST['id_cliente'];

$sql = "DELETE FROM cliente WHERE id_cliente '" . $idCliente . "'";

    if ($datos = mysqli_query($conexion, $sql)) {
        echo "Datos eliminados correctamente";
    } else {
        echo "Error, no se elimino correctamente: " . mysqli_error($conexion);
    }
    
?>