<?php

session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;




	switch ($_POST["accion"]) {
   
	    case "editarParticularPersonal":
	    	$idParticular= $_POST["idParticular"];
	    	$rutParticular = $_POST["rutParticular"];
	    	$nombreParticular = $_POST["nombreParticular"];
	    	$direccionParticular = $_POST["direccionParticular"];
	    	$telefonoParticular = $_POST["telefonoParticular"];
	    	

	        $records = $gbd->prepare('UPDATE particular SET rutParticular=:rutParticular,nombreParticular=:nombreParticular,direccionParticular=:direccionParticular,telefonoParticular=:telefonoParticular WHERE idParticular=:idParticular');
			$records->bindParam(':rutParticular', $rutParticular);
			$records->bindParam(':nombreParticular', $nombreParticular);
			$records->bindParam(':direccionParticular', $direccionParticular);
			$records->bindParam(':telefonoParticular', $telefonoParticular);
			$records->bindParam(':idParticular', $idParticular);
			if ($records->execute()) {
				$_SESSION["rutParticular"]=$rutParticular;
				$_SESSION["nombreParticular"]=$nombreParticular;
				$_SESSION["direccionParticular"]=$direccionParticular;
				$_SESSION["telefonoParticular"]=$telefonoParticular;
				header("Location: ../Vista/Laboratorio/editarCuenta.php");
			}

			
	        break;

	    case "editarIngreso":
	    	
	    	$id= $_POST["idUsuario"];
	        $email = $_POST["email"];
	        $contrasena = $_POST["contrasena"];
	        $record = $gbd->prepare('UPDATE usuario SET email= :email, contrasena=:contrasena WHERE id = :id');
			$record->bindParam(':email', $email);
			$record->bindParam(':contrasena', $contrasena);
			$record->bindParam(':id', $id);
			if ($record->execute()) {
				
				$_SESSION["email"]=$email;
				$_SESSION["contrasena"]=$contrasena;
				header("Location: ../Vista/Laboratorio/editarCuenta.php");
			}
			
			break;

		case "editarIngresoEmpR":
	    	
	    	$id= $_POST["idUsuario"];
	        $email = $_POST["email"];
	        $contrasena = $_POST["contrasena"];
	        $record = $gbd->prepare('UPDATE usuario SET email= :email, contrasena=:contrasena WHERE id = :id');
			$record->bindParam(':email', $email);
			$record->bindParam(':contrasena', $contrasena);
			$record->bindParam(':id', $id);
			if ($record->execute()) {
				
				$_SESSION["email"]=$email;
				$_SESSION["contrasena"]=$contrasena;
				header("Location: ../Vista/EmpleadoReceptor/editarDatos.php");
			}
			
		break;

		case "editarIngresoEmpT":
	    	
	    	$id= $_POST["idUsuario"];
	        $email = $_POST["email"];
	        $contrasena = $_POST["contrasena"];
	        $record = $gbd->prepare('UPDATE usuario SET email= :email, contrasena=:contrasena WHERE id = :id');
			$record->bindParam(':email', $email);
			$record->bindParam(':contrasena', $contrasena);
			$record->bindParam(':id', $id);
			if ($record->execute()) {
				
				$_SESSION["email"]=$email;
				$_SESSION["contrasena"]=$contrasena;
				header("Location: ../Vista/EmpleadoTecnico/editarDatos.php");
			}
			
		break;	

	    case "editarEmpresa":
	    	
	    	$id= $_POST["idEmpresa"];
	        $rutEmpresa = $_POST["rutEmpresa"];
	        $nombreEmpresa = $_POST["nombreEmpresa"];
	        $direccionEmpresa = $_POST["direccionEmpresa"];
	        $record = $gbd->prepare('UPDATE empresa SET rutEmpresa=:rutEmpresa,nombreEmpresa=:nombreEmpresa,direccionEmpresa=:direccionEmpresa WHERE idEmpresa=:id');
			$record->bindParam(':rutEmpresa', $rutEmpresa);
			$record->bindParam(':nombreEmpresa', $nombreEmpresa);
			$record->bindParam(':direccionEmpresa', $direccionEmpresa);
			$record->bindParam(':id', $id);
			
			if ($record->execute()) {				
				$_SESSION["rutEmpresa"]=$rutEmpresa;
				$_SESSION["nombreEmpresa"]=$nombreEmpresa;
				$_SESSION["direccionEmpresa"]=$direccionEmpresa;

				header("Location: ../Vista/Laboratorio/editarCuenta.php");
			} 
			break;


		   case "editarContacto":
	    	
	    	$id= $_POST["idEmpresaC"];
	        $rutContacto = $_POST["rutContacto"];
	        $nombreContacto = $_POST["nombreContacto"];
	        $telefonoContacto = $_POST["telefonoContacto"];
	        $record = $gbd->prepare('UPDATE contacto SET rutContacto=:rutContacto,nombreContacto=:nombreContacto,telefonoContacto=:telefonoContacto WHERE idEmpresaC=:idEmpresaC');
			$record->bindParam(':rutContacto', $rutContacto);
			$record->bindParam(':nombreContacto', $nombreContacto);
			$record->bindParam(':telefonoContacto', $telefonoContacto);
			$record->bindParam(':idEmpresaC', $id);
			if ($record->execute()) {
				
				$_SESSION["rutContacto"]=$rutContacto;
				$_SESSION["nombreContacto"]=$nombreContacto;
				$_SESSION["telefonoContacto"]=$telefonoContacto;

				header("Location: ../Vista/Laboratorio/editarCuenta.php");
			}
			
				
			break;	
	}


?>