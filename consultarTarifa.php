<div>
    <table>
        <thead>
            <tr>
                <th>Nombre de la Tarifa</th>
                <th>Monto</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conexion.php";

            $query = "SELECT id_tarifa, tarifa, monto FROM tarifa";
            $ejecutar = $conexion->query($query);

            while ($result = $ejecutar->fetch_array()) {
                echo "<tr>
                        <td>" . $result['tarifa'] . "</td>
                        <td>" . $result['monto'] . "</td>
                        <td><a href='' onclick='editarTarifa(" . $result['id_tarifa'] . ")'>Editar</a></td>
                        <td><a href='' onclick='eliminarTarifa(" . $result['id_tarifa'] . ")'>Eliminar</a></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
