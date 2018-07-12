<?php
session_start();
if( isset($_SESSION['user_id']) ){
	header("Location: /");
}
require '../Modelo/conexion.php';
global $gbd;

if(!empty($_POST['email']) && !empty($_POST['contrasena'])):
	
	$records = $gbd->prepare('SELECT id,email,contrasena FROM usuario WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
	$msj = '';
	if(count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena']) ){
		$_SESSION['user_id'] = $results['id'];
		header("Location: /");
	} else {
		$msj = 'Los datos no coinciden';
	}
endif;
?>

<?php include 'header.php';?>

	<div class="container" style="text-align: center;">
		<div class="block-login">

			<?php if(!empty($message)): ?>
				<p><?= $msj ?></p>
			<?php endif; ?>

			<h1 style="color:#007bff;">Iniciar Sesión</h1>
			

			<form action="inicio.php" method="POST">
				
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