<?php
session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;

if(!empty($_POST['email']) && !empty($_POST['contrasena'])){

	$email=$_POST['email'];
	$contrasena=$_POST['contrasena'];
	
	$records = $gbd->prepare('SELECT id,email,contrasena,tipo FROM usuario WHERE email = :email AND contrasena = :contrasena');
	$records->bindParam(':email', $email);
	$records->bindParam(':contrasena', $contrasena);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
	$msj = '';

	$id= $results['id'];
	$tipo= $results['tipo'];

	if(count($results) > 0 && $results['contrasena']==$contrasena){
		if($tipo=="particular"){
			$datos = $gbd->prepare('SELECT idParticular, rutParticular, nombreParticular, direccionParticular, telefonoParticular FROM particular WHERE idUsuario = :id');
			$datos->bindParam(':id', $id);
			$datos->execute();
			$resultadoLogin = $datos->fetch(PDO::FETCH_ASSOC);
		
			$_SESSION['idParticular'] = $resultadoLogin['idParticular'];
			$_SESSION['rutParticular'] = $resultadoLogin['rutParticular'];
			$_SESSION['nombreParticular'] = $resultadoLogin['nombreParticular'];
			$_SESSION['direccionParticular'] = $resultadoLogin['direccionParticular'];
			$_SESSION['telefonoParticular'] = $resultadoLogin['telefonoParticular']; 

		} else {
			if ($tipo == "empresa") {
				$datosEmpresa = $gbd->prepare('SELECT idEmpresa, rutEmpresa, nombreEmpresa, direccionEmpresa FROM empresa where idUsuario = :id');
				$datosEmpresa->bindParam(':id', $id);
				$datosEmpresa->execute();
				$resultadoLoginE = $datosEmpresa->fetch(PDO::FETCH_ASSOC);

				$_SESSION['idEmpresa'] = $resultadoLoginE['idEmpresa'];	
				$_SESSION['rutEmpresa'] = $resultadoLoginE['rutEmpresa'];
				$_SESSION['nombreEmpresa'] = $resultadoLoginE['nombreEmpresa'];
				$_SESSION['direccionEmpresa'] = $resultadoLoginE['direccionEmpresa'];

				$datosContacto = $gbd->prepare('SELECT rutContacto, nombreContacto, telefonoContacto, idEmpresaC FROM contacto where idEmpresaC = :id');
				$idEmpresa= $resultadoLoginE['idEmpresa'];
				$datosContacto->bindParam(':id', $idEmpresa);
				$datosContacto->execute();
				$resultadoLoginC = $datosContacto->fetch(PDO::FETCH_ASSOC);

				$_SESSION['rutContacto'] = $resultadoLoginC['rutContacto'];	
				$_SESSION['nombreContacto'] = $resultadoLoginC['nombreContacto'];
				$_SESSION['telefonoContacto'] = $resultadoLoginC['telefonoContacto'];
				$_SESSION['idEmpresaC'] = $resultadoLoginC['idEmpresaC'];

			}
		} 
		
		
		$_SESSION['tipo'] = $tipo;
		$_SESSION['contrasena']= $contrasena;
		$_SESSION['email']= $email;
		header("Location: ../Vista/inicio.php?msj=exito");
	} else {
		$msj = 'Email o Contraseña invalidos';
		header("Location: ../Vista/login.php?msj=error");
		return $msj;
	}

}else{
	$msj= "Debe completar todos los campos";
	header("Location: ../Vista/login.php");
	return $msj;
}
