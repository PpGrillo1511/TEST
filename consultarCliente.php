<div>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
    <tbody>
<?php
include "conexion.php";

    $query = "SELECT id_cliente,nombre,direccion,correo,telefono FROM cliente";
    $ejecutar=$conexion->query($query);
    while($result=$ejecutar->fetch_array()){
        echo "<tr>
        <td>".$result['nombre']."</td>
        <td>".$result['direccion']."</td>
        <td>".$result['correo']."</td>
        <td>".$result['telefono']."</td>
        <td><a href='' onclick='editarcliente(" . $result['id_cliente'] . ")'>Editar</a></td>
        <td><a href='' onclick='eliminarCliente(" . $result['id_cliente'] . ")'>Eliminar</a></td>
        </tr>";
    }
?>
</tbody>
</table>
</div>