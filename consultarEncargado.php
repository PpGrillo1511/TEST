<div>
    <table>
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo Electrónico</th>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conexion.php";

            $query = "SELECT id_encargado, nombre, direccion, telefono, correo, usuario, contrasena FROM encargado";
            $ejecutar = $conexion->query($query);

            while ($result = $ejecutar->fetch_array()) {
                echo "<tr>
                        <td>" . $result['nombre'] . "</td>
                        <td>" . $result['direccion'] . "</td>
                        <td>" . $result['telefono'] . "</td>
                        <td>" . $result['correo'] . "</td>
                        <td>" . $result['usuario'] . "</td>
                        <td>" . $result['contrasena'] . "</td>
                        <td><a href='' onclick='editarEncargado(" . $result['id_encargado'] . ")'>Editar</a></td>
                        <td><a href='' onclick='eliminarEncargado(" . $result['id_encargado'] . ")'>Eliminar</a></td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>
