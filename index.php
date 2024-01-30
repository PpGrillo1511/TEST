<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/estilo.css">
  <title>Document</title>
</head>
<body>
  <div class="wrapper">
    <div class="title">
      Bienvenido
    </div>
    <form action="login.php" method="post">
      <div class="field">
        <input type="text" name="usuario" required>
        <label class="usuario">Ingresa tu usuario</label>
      </div>
      <div class="field">
        <input type="password" name="contrasena" required>
        <label class="contrasena">Contraseña</label>
      </div>
      <div class="field">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
</body>
<script src="scripts/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
