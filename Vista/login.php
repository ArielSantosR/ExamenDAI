
<?php session_start();?>
<?php include 'header.php';?>


	<div class="container" style="text-align: center;">
		<div class="block-login">

			<?php if(!empty($msj)): ?>
				<p style="color: red;"><?= $msj; ?></p>
			<?php endif; ?>

			<h1 style="color:#007bff;">Iniciar Sesión</h1>
			

			<form action="../Controller/ControllerLogin.php" method="POST">
				
				<div class="cubo">
					<div style="margin: 5%;">
						<p class="labbel">Email</p>
						<input class="form-control input-md inputt" type="text" name="email">
					</div>
					<div style="margin: 5%;">
						<p class="labbel">Contraseña</p>
						<input class="form-control input-md inputt" type="password"  name="contrasena">
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