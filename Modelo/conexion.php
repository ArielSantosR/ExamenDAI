<?php
	class ConexionBD{
		
		function __construct(){
			return $this->conn();
		}

		function conn(){
			global $gbd;
			$dsn = 'mysql:host=localhost;dbname=examen;host=127.0.0.1';
			$usuario = 'root';
			$contrasena = '';
	
			try {
				$gbd = new PDO($dsn, $usuario, $contrasena);
				
			} catch (PDOException $e) {
				echo 'Falló la conexión: ' . $e->getMessage();
			}
		}
	}
?>