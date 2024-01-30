<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/registrar.css">
    <title>Registro de Horas</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Bienvenido
        </div>
        <form id="frmregistrar" name="frmregistrar">
            <div class="field">
            <label class="modelo-vehiculo">Vehículo</label>
                <select id="vehiculo" name="vehiculo" >
                    <?php
                    include "conexion.php";

                    $query = "SELECT id_vehiculo, matricula FROM vehiculos";
                    $result = mysqli_query($conexion, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id_vehiculo'] . "'>" . $row['matricula'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="field">
                <!-- Menú desplegable para cajones -->
                <label class="nombre-usuario">Cajón</label>
                <select id="cajon" name="cajon" >
                    <?php
                    $query = "SELECT id_cajon, numero FROM cajon";
                    $result = mysqli_query($conexion, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id_cajon'] . "'>" . $row['numero'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="field">
                <!-- Menú desplegable para tarifas -->
                <label class="marca-vehiculo">Tarifa</label>
                <select id="tarifa" name="tarifa">
                    <?php
                    $query = "SELECT id_tarifa, tarifa FROM tarifa";
                    $result = mysqli_query($conexion, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id_tarifa'] . "'>" . $row['tarifa'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="field">
            <input type="button" onclick="registrarRegistro(    )" value="Registrar">
            </div>
        </form>
    </div>
    <div class="container">
        <?php
        include "consultarRegistro.php";
        ?>
    </div>
    <script src="scripts/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
