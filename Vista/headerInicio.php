<!DOCTYPE html>
<html>
<head>
	<title>ISP</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
</head>
<body>


              <nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" ><strong>ISP</strong>
				  	<p style="color: #007bff;display: initial;"><?php echo $_SESSION['email'] ?></p></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				    <div class="navbar-nav">
				      <a class="nav-item nav-link " href="inicio.php">Inicio</a>
				      <a class="nav-item nav-link" href="cerrar.php">Cerrar Sesión</a>
				      <a class="nav-item nav-link" href="editarCuenta.php">Mis Datos</a>
				     	<a class="nav-item nav-link" href="#">Mis Muestras</a>
				     	<a class="nav-item nav-link" href="formularioCliente.php">Enviar Muestras</a>
				    </div>
				  </div>
				</nav>

              <div class="container-fluid" style="min-height: 90vh;padding-top: 3%;">