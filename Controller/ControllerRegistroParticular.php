<?php
session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;


$msj = '';
if(!empty($_POST['rutParticular']) && !empty($_POST['nombreParticular']) && !empty($_POST['passParticular']) && !empty($_POST['direccionParticular']) && !empty($_POST['emailParticular']) && !empty($_POST['telefonoParticular']) 
	&& !empty($_POST["repetPassParticular"])){

	if($_POST["passParticular"] == $_POST["repetPassParticular"]){

	
	
		$rutParticular=$_POST['rutParticular'];
		$nombreParticular=$_POST['nombreParticular'];
		$passParticular=$_POST['passParticular'];
		$direccionParticular=$_POST['direccionParticular'];
		$emailParticular=$_POST['emailParticular'];
		$telefonoParticular=$_POST['telefonoParticular'];
		$tipo = "particular";
		$id=0;


		$sql = "INSERT INTO usuario(id, email, contrasena, tipo) VALUES (:id,:email, :contrasena, :tipo)";

		$stmt = $gbd->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':email', $emailParticular);
		$stmt->bindParam(':contrasena', $passParticular);
		$stmt->bindParam(':tipo', $tipo);
		
		$stmt->execute();
		$lastIdUsuario = $gbd->lastInsertId();



		$sql = "INSERT INTO particular(idParticular, rutParticular, nombreParticular, direccionParticular, telefonoParticular, idUsuario) VALUES (:idParticular, :rutParticular, :nombreParticular, :direccionParticular, :telefonoParticular, :idUsuario)";

		$stmt = $gbd->prepare($sql);
		$stmt->bindParam(':idParticular', $id);
		$stmt->bindParam(':rutParticular', $rutParticular);
		$stmt->bindParam(':nombreParticular', $nombreParticular);
		$stmt->bindParam(':direccionParticular', $direccionParticular);
		$stmt->bindParam(':telefonoParticular', $telefonoParticular);
		$stmt->bindParam(':idUsuario', $lastIdUsuario);
		

		if( $stmt->execute() ){
			$msj = 'Usuario creado correctamente';
			header("Location: ../Vista/registro.php");

		}else{
			$msj = 'No se pudo crear la cuenta, vuelva a intentar';
			header("Location: ../Vista/registro.php");
		}


	}else{
		$msj = 'Las contraseñas deben coincidir';
		header("Location: ../Vista/registro.php");
	}
}else{
	$msj= "Debe completar todos los campos";
	header("Location: ../Vista/registro.php");
	return $msj;
}

?>