<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/registrar.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">
           Agregar tarifa
        </div>
        <form name="frmtarifas" id="frmtarifas">
            <div class="field">
                <input type="text" name="tarifa" id="tarifa" required>
                <label class="hora-salida">Nombre de la tarifa</label>
            </div>
            <div class="field">
                <input type="text" name="monto" id="monto" required>
                <label class="vehiculo">Monto $0.00</label>
            </div>
            <div class="field">
            <input type="button" onclick="registrarTarifa()" value="Registrar">
            </div>
        </form>
    </div>

<?php
include 'consultartarifa.php'
?>
    <script src="scripts/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
