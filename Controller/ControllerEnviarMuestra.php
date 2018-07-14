<?php
session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;

if (!empty($_POST['muestra'])){
    $muestra= $_POST['muestra'];

    $sql = "INSERT INTO analisisMuestras(tipo) VALUES (:muestra)";

	$stmt = $gbd->prepare($sql);
    $stmt->bindParam(':muestra', $muestra);
    $stmt->execute();
    $res = $stmt->execute();
    
    if ($res > 0){
        
    }

}