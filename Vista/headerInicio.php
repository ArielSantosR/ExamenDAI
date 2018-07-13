<!DOCTYPE html>
<html>
<head>
	<title>ISP</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>
<body>

	<nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                  	<?php session_start();?>
                    <a class="navbar-brand" style="width: 400px;">
                    	<strong>ISP</strong> 
                    	<p style="color: #007bff;display: initial;"><?php echo $_SESSION['email'] ?></p>
                    </a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="cerrar.php">Cerrar Sesión</a></li>
                    <li><a href="#">Editar Mis Datos</a></li>
                    <li><a href="#">Mis Muestras</a></li>
                    <li><a href="#">Enviar Muestras</a></li>
                </ul>
                </div>
              </nav>

              <div class="container-fluid" style="min-height: 90vh;">