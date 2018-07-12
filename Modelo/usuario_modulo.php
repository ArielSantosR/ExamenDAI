<?php
require_once '../Modelo/Usuario.php';

class Usuario{
    function RegistrarUsuario($id,$email,$contrasena){
        try
		{
			
			global $gbd;
		
			
				$query= "INSERT INTO usuario (id, email, contrasena) 
				VALUES (:id,:email,:contrasena)";
				$sentencia = $gbd->prepare($query);
				$sentencia->bindParam(':id', $id);
				$sentencia->bindParam(':email', $email);
				$sentencia->bindParam(':contrasena', $contrasena);

				
				$sentencia->execute();
				if($sentencia->rowcount() > 0) {
					return true;
					exit();
				} else {
					return false;
					exit();
				}
			
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			$db = null;
			return false;
		} 
		$sentencia = null;
		$db = null;
    }
}
