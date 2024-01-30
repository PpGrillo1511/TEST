<div>
    <table>
        <thead>
            <tr>
                <th>Matrícula</th>
                <th>Modelo</th>
                <th>Tipo</th>
                <th>Cliente</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conexion.php";

            $query = "SELECT v.id_vehiculo, v.matricula, v.modelo, v.tipo, c.nombre as cliente_nombre FROM vehiculos v
                      JOIN cliente c ON v.id_cliente = c.id_cliente";
            $ejecutar = $conexion->query($query);

            while ($result = $ejecutar->fetch_array()) {
                echo "<tr>
                        <td>" . $result['matricula'] . "</td>
                        <td>" . $result['modelo'] . "</td>
                        <td>" . $result['tipo'] . "</td>
                        <td>" . $result['cliente_nombre'] . "</td>
                        <td><a href='' onclick='editarVehiculo(" . $result['id_vehiculo'] . ")'>Editar</a></td>
                        <td><a href='' onclick='eliminarVehiculo(" . $result['id_vehiculo'] . ")'>Eliminar</a></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
