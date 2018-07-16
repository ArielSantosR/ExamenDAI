<?php

session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;

echo "pasa por el controller editar";
if($_POST["tipo"]=="particular"){
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
			$records->execute();
			header("Location: ../Vista/Laboratorio/editarCuenta.php");
	        break;

	    case "editarParticularIngreso":
	    	$id= $_POST["idUsuario"];
	        $email = $_POST["email"];
	        $contrasena = $_POST["contrasena"];
	        $records = $gbd->prepare('UPDATE usuario SET email= :email, contrasena=:contrasena WHERE id = :id');
			$records->bindParam(':email', $email);
			$records->bindParam(':contrasena', $contrasena);
			$records->bindParam(':id', $id);
			$records->execute();
			header("Location: ../Vista/Laboratorio/editarCuenta.php");
	        break;
	}
}

?>