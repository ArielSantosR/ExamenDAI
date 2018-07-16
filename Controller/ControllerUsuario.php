<?php

session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;



switch ($_POST["accion"]) {
   
    case "Deshabilitar":
    	$id= $_POST["idUsuario"];
    	$estado = "D";
        $records = $gbd->prepare('UPDATE usuario SET estado= :nuevoEstado WHERE id = :id');
		$records->bindParam(':nuevoEstado', $estado);
		$records->bindParam(':id', $id);
		$records->execute();
		header("Location: ../Vista/Admin/listaUsuarios.php");
        break;
    case "Habilitar":
    	$id= $_POST["idUsuario"];
        $estado = "H";
        $records = $gbd->prepare('UPDATE usuario SET estado= :nuevoEstado WHERE id = :id');
		$records->bindParam(':nuevoEstado', $estado);
		$records->bindParam(':id', $id);
		$records->execute();
		header("Location: ../Vista/Admin/listaUsuarios.php");
        break;


    case "nuevoUsuario":
    
    	if (!empty($_POST["emailEmpleado"]) && !empty($_POST["passEmpleado"]) && !empty($_POST["rol"])
    	 && !empty($_POST["rol"]) && !empty($_POST["nombreEmpleado"]) && !empty($_POST["nombreEmpleado"]) 
    	 && !empty($_POST["rutEmpleado"])) {


    		$id = 0;
	    	$email = $_POST['emailEmpleado'];
	    	$contrasena = $_POST['passEmpleado'];
	    	$tipo  = "empleado";
	    	$estado = "H";
	        
	        $record = $gbd->prepare('INSERT INTO usuario(id, email, contrasena, tipo, estado) VALUES (:id, :email, :contrasena, :tipo, :estado )');
			$record->bindParam(':id', $id);
			$record->bindParam(':email', $email);
			$record->bindParam(':contrasena', $contrasena);
			$record->bindParam(':tipo', $tipo);
			$record->bindParam(':estado', $estado);
			if ($record->execute()) {
				

				$lastIdUsuario = $gbd->lastInsertId();

				$idEmpleado = 0;
				$rol = $_POST["rol"];
				$nombreEmpleado = $_POST["nombreEmpleado"];
				$idUsuario = $lastIdUsuario;
				$rutEmpleado = $_POST["rutEmpleado"];

				$datos = $gbd->prepare('INSERT INTO empleado(idEmpleado, rol, nombreEmpleado, idUsuario, rutEmpleado) VALUES (:idEmpleado, :rol, :nombreEmpleado, :idUsuario, :rutEmpleado)');
				$datos->bindParam(':idEmpleado', $idEmpleado);
				$datos->bindParam(':rol', $rol);
				$datos->bindParam(':nombreEmpleado', $nombreEmpleado);
				$datos->bindParam(':idUsuario', $idUsuario);
				$datos->bindParam(':rutEmpleado', $rutEmpleado);
				$datos->execute();

				header("Location: ../Vista/Admin/listaUsuarios.php");
			}
    	}else{
    		echo "hay un dato vacio";
    	}

		
        break;    
}

?>