<?php
session_start();
require '../Modelo/conexion.php';
$db = new ConexionBD();

require '../Modelo/usuario_modulo.php';
$usuario = new Usuario();


$msj="";

if(!isset($_POST["email"]) && !isset($_POST["contrasena"])):
	
	$email = test_input($_POST["email"]);
	$contrasena = test_input($_POST["contrasena"]);
	$Rcontrasena = test_input($_POST["Rcontrasena"]);
			
			if ($contrasena==$Rcontrasena) {
				
				$usuario->RegistrarUsuario(0,$email,$contrasena);

				$msj="Registrado Correctamente";
				header('Location: ../Vista/registro.php');
			}else{
				$msj="La contraseña debe ser identica";
				header('Location: ../Vista/registro.php');
			}



endif;


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



?>