
<?php session_start();?>
<?php include '../Laboratorio/header.php';?>


	<div class="container" style="text-align: center;">
		
		 

			<?php if(!empty($_SESSION["msj"])): ?>
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <?php echo $_SESSION["msj"]; ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<?php endif; ?>
		
		<div class="block-login">

			

			<h1 class="colorsito">Iniciar Sesión</h1>
			

			<form action="../../Controller/ControllerLogin.php" method="POST">
				
				<div class="cubo">
					<div style="margin: 5%;">
						<p class="labbel">Email</p>
						<input class="form-control input-md inputt" type="text" name="email" required="">
					</div>
					<div style="margin: 5%;">
						<p class="labbel">Contraseña</p>
						<input class="form-control input-md inputt" type="password"  name="contrasena" required="">
					</div>
				</div>

				<div style="padding: 10px;">
					<input class="btn btn-dark" type="submit" name="enviar" value="Iniciar Sesión">
				</div>

			</form>
			<div><a href="../Laboratorio/registro.php">Registrarse</a></div>
					
		</div>
	</div>

<?php include '../Laboratorio/footer.php'; ?>