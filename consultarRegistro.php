<div>
    <table>
        <thead>
            <tr>
                <th>Fecha de Ingreso</th>
                <th>Hora de Ingreso</th>
                <th>Fecha de Salida</th>
                <th>Hora de Salida</th>
                <th>Vehículo</th>
                <th>Cajón</th>
                <th>Tarifa</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conexion.php";

            $query = "SELECT r.id_registro, r.fechaIngreso, r.horaIngreso, r.fechaSalida, r.horaSalida, 
                             v.Matricula as vehiculo, c.numero as cajon, t.tarifa as tarifa
                      FROM registro r
                      JOIN vehiculos v ON r.id_vehiculo = v.id_vehiculo
                      JOIN cajon c ON r.id_cajon = c.id_cajon
                      JOIN tarifa t ON r.id_tarifa = t.id_tarifa";
            $ejecutar = $conexion->query($query);

            while ($result = $ejecutar->fetch_array()) {
                echo "<tr>
                        <td>" . $result['fechaIngreso'] . "</td>
                        <td>" . $result['horaIngreso'] . "</td>
                        <td>" . $result['fechaSalida'] . "</td>
                        <td>" . $result['horaSalida'] . "</td>
                        <td>" . $result['vehiculo'] . "</td>
                        <td>" . $result['cajon'] . "</td>
                        <td>" . $result['tarifa'] . "</td>
                        <td><a href='' onclick='editarRegistro(" . $result['id_registro'] . ")'>Editar</a></td>
                        <td><a href='' onclick='eliminarRegistro(" . $result['id_registro'] . ")'>Eliminar</a></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
