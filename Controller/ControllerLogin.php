<?php
session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;




if(!empty($_POST['email']) && !empty($_POST['contrasena'])):

	$email=$_POST['email'];
	$contrasena=$_POST['contrasena'];
	
	$records = $gbd->prepare('SELECT id,email,contrasena FROM usuario WHERE email = :email AND contrasena = :contrasena');
	$records->bindParam(':email', $email);
	$records->bindParam(':contrasena', $contrasena);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
	$msj = '';
	if(count($results) > 0 && $results['contrasena']==$contrasena){
		$_SESSION['email']= $email;
		header("Location: ../Vista/inicio.php");
	} else {
		$msj = 'Email o Contraseña invalidos';
		header("Location: ../Vista/login.php");
		return $msj;
		
	}

else:
	$msj= "Debe completar todos los campos";
	header("Location: ../Vista/login.php");
	return $msj;
endif;





?>