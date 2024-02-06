<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
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
                <input type="date" name="fechaIngreso" id="fechaIngreso" required>
                <label class="fecha-ingreso">Fecha de Ingreso</label>
            </div>
            <div class="field">
                <input type="time" name="horaIngreso" id="horaIngreso" required>
                <label class="hora-ingreso">Hora de Ingreso</label>
            </div>
            <div class="field">
                <input type="date" name="fechaSalida" id="fechaSalida" required>
                <label class="fecha-salida">Fecha de Salida</label>
            </div>
            <div class="field">
                <input type="time" name="horaSalida" id="horaSalida" required>
                <label class="hora-salida">Hora de Salida</label>
            </div>
            <div class="field">
            <label class="modelo-vehiculo">Vehículo</label>
                <select id="vehiculo" name="vehiculo" class="form-select" required>
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
                <!-- Menú desplegable para cajones con estilos de Bootstrap -->
                <label class="nombre-usuario">Cajón</label>
                <select id="cajon" name="cajon" class="form-select" required>
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
                <!-- Menú desplegable para tarifas con estilos de Bootstrap -->
                <label class="marca-vehiculo">Tarifa</label>
                <select id="tarifa" name="tarifa" class="form-select" required>
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
            <input type="button" onclick="registrarRegistro()" value="Registrar">
            </div>
        </form>
    </div>

<?php
include 'consultarregistro.php'
?>
    <script src="scripts/bootstrap.bundle.min.js" crossorigin="anonymous"></script>   
</body>

</html>
