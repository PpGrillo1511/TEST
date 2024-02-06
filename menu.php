<?php
//INICIAR SESION
session_start();
if (!isset($_SESSION['loggedin'])) {
    echo '<script languaje="javascript">alert("Tienes que acceder con tu usuario y contraseña");location.href="index.php";</script>';
    exit;
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="CSS/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <script src="scripts/js/jquery.min.js"></script>
        <link rel="stylesheet" href="CSS/style.css">
        <script src="scripts/js/funciones.js"></script>
        <title>Sistema de control de Iot</title>
    </head>

    <body>

    <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="active">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4">
		  		<h1><a href="menu.php" class="logo">Información del sistema</a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#"><span class="fa fa-home mr-3"></span> Inicio</a>
	          </li>
	          <li>
	              <a href="#" onclick="cargarDiv('#contenido' ,'registrar.php');"><span class="fa fa-user mr-3"></span> Registro</a>
	          </li>
	          <li>
              <a href="#" onclick="cargarDiv('#contenido' ,'inicio.php');"><span class="fa fa-briefcase mr-3"></span> Dashboard</a>
	          </li>
	          <li>
              <a href="#" onclick="cargarDiv('#contenido','cajones.php')"><span class="fa fa-sticky-note mr-3"></span> Cajones</a>
	          </li>
	          <li>
              <a href="#" onclick="cargarDiv('#contenido','clientes.php')"><span class="fa fa-paper-plane mr-3"></span> Clientes</a>
	          </li>
	          <li>
              <a href="#" onclick="cargarDiv('#contenido','vehiculos.php')"><span class="fa fa-paper-plane mr-3"></span> Vehiculos</a>
	          </li>
	          <li>
              <a href="#" onclick="cargarDiv('#contenido','tarifas.php')"><span class="fa fa-paper-plane mr-3"></span> Tarifas</a>
	          </li>
	          <li>
              <a href="#" onclick="cargarDiv('#contenido','encargados.php')"><span class="fa fa-paper-plane mr-3"></span> Encargados</a>
	          </li>
	          <li>
              <a href="#" onclick="cargarDiv('#contenido','reportes.php')"><span class="fa fa-paper-plane mr-3"></span> Reportes</a>
	          </li>
	          <li>
              <a href="#" onclick="salir();"><span class="fa fa-paper-plane mr-3"></span> Salir</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>
        <div id="contenido" class="p-4 p-md-5 pt-5"></div>
        </div>
    </body>
    <script src="scripts/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="scripts/popper.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>
    </html>
<?php
}
?>