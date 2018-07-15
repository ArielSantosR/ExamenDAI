
<?php session_start();?>
<?php include 'header.php';?>


	<div class="container" style="text-align: center;">
		<div class="block-login">

			<?php if(!empty($_SESSION["msj"])): ?>
				<p style="color: red;"><?php echo $_SESSION["msj"]; ?></p>
			<?php endif; ?>

			<h1 class="colorsito">Iniciar Sesión</h1>
			

			<form action="../Controller/ControllerLogin.php" method="POST">
				
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
			<div><a href="registro.php">Registrarse</a></div>
					
		</div>
	</div>

<?php include 'footer.php'; ?>