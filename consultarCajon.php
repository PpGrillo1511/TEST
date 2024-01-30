<div>
    <table>
        <thead>
            <tr>
                <th>Número de Cajón</th>
                <th>Estatus</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conexion.php";

            $query = "SELECT id_cajon, numero,status FROM cajon";
            $ejecutar = $conexion->query($query);

            while ($result = $ejecutar->fetch_array()) {
                echo "<tr>
                        <td>" . $result['numero'] . "</td>
                        <td>" . $result['status'] . "</td>
                        <td><a href='' onclick='editarCajon(" . $result['id_cajon'] . ")'>Editar</a></td>
                        <td><a href='' onclick='eliminarCajon(" . $result['id_cajon'] . ")'>Eliminar</a></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
