<?php
session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;


$msj = '';
	if(!empty($_POST['rutEmpresa']) && !empty($_POST['nombreEmpresa']) && !empty($_POST['direccionEmpresa']) 
	&& !empty($_POST['rutContacto']) && !empty($_POST['nombreContacto']) && !empty($_POST['telefonoContacto'])
	 && !empty($_POST['emailContacto']) && !empty($_POST['contrasenaEmpresa'])):


	if ($_POST["contrasenaEmpresa"]== $_POST["RcontrasenaEmpresa"]) {
		
	
	
		$id=0;
	 	//Datos empresa
		$rutEmpresa=$_POST['rutEmpresa'];
		$nombreEmpresa=$_POST['nombreEmpresa'];
		$direccionEmpresa=$_POST['direccionEmpresa'];
		// Datos contacto
		$rutContacto=$_POST['rutContacto'];
		$nombreContacto=$_POST['nombreContacto'];
		$telefonoContacto=$_POST['telefonoContacto'];
		// Datos usuario	
		$emailContacto=$_POST['emailContacto'];
		$passEmpresa=$_POST['contrasenaEmpresa'];
		$tipo = "empresa";
		$estado = "H";

		$sql = "INSERT INTO usuario(id, email, contrasena, tipo, estado) VALUES (:id,:email, :contrasena, :tipo, :estado)";

		$stmt = $gbd->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':email', $emailContacto);
		$stmt->bindParam(':contrasena', $passEmpresa);
		$stmt->bindParam(':tipo', $tipo);
		$stmt->bindParam(':estado', $estado);
		
		$stmt->execute();
		$lastIdUsuario = $gbd->lastInsertId();

		$sql = "INSERT INTO empresa(idEmpresa, rutEmpresa, nombreEmpresa, direccionEmpresa, idUsuario) VALUES (:idEmpresa, :rutEmpresa, :nombreEmpresa, :direccionEmpresa, :idUsuario)";

		$stmt = $gbd->prepare($sql);
		$stmt->bindParam(':idEmpresa', $id);
		$stmt->bindParam(':rutEmpresa', $rutEmpresa);
		$stmt->bindParam(':nombreEmpresa', $nombreEmpresa);
		$stmt->bindParam(':direccionEmpresa', $direccionEmpresa);
		$stmt->bindParam(':idUsuario', $lastIdUsuario);

		$stmt->execute();
		
		$lastIdEmpresa = $gbd->lastInsertId();


		$sql = "INSERT INTO contacto(rutContacto, nombreContacto, telefonoContacto, idEmpresaC) VALUES (:rutContacto, :nombreContacto, :telefonoContacto, :idEmpresaC)";

		$stmt = $gbd->prepare($sql);
		$stmt->bindParam(':rutContacto', $rutContacto);
		$stmt->bindParam(':nombreContacto', $nombreContacto);
		$stmt->bindParam(':telefonoContacto', $telefonoContacto);
		$stmt->bindParam(':idEmpresaC', $lastIdEmpresa);

		if( $stmt->execute() ):
			$msj = 'Cuenta creada correctamente';
			header("Location: ../Vista/Laboratorio/registro.php");
		else:
			$msj = 'No se pudo crear la cuenta, vuelva a intentar';
			header("Location: ../Vista/Laboratorio/registro.php");
		endif;

	}else{
		$msj = 'Las contraseñas deben coincidir';
		header("Location: ../Vista/Laboratorio/registro.php");
	}

else:
	$msj= "Debe completar todos los campos";
	header("Location: ../Vista/Laboratorio/registro.php");
	return $msj;

endif;


?>