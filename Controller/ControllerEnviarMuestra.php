<?php
session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;

if (!empty($_POST['muestra'])){
    $muestra= $_POST['muestra'];
    $estado = "F";
    if (isset($_POST['codigo_empresa'])){
        $codigoParticular = null;
        $codigoEmpresa = $_POST['codigo_empresa'];
        
    }
    
    if (isset($_POST['codigo_particular'])){
        $codigoEmpresa = null;
        $codigoParticular = $_POST['codigo_particular'];
    }

    $sql = "INSERT INTO analisisMuestras(tipo, codigo_empresa, codigo_particular, estado) 
    VALUES (:muestra, :codigo_empresa, :codigo_particular, :estado)";

	$sentencia = $gbd->prepare($sql);
    $sentencia->bindParam(':muestra', $muestra);
    $sentencia->bindParam('codigo_empresa', $codigoEmpresa);
    $sentencia->bindParam('codigo_particular', $codigoParticular);
    $sentencia->bindParam('estado', $estado);
    $sentencia->execute();
    
    if($sentencia->rowcount() > 0) {
        header('Location: ../Vista/Cliente/formularioCliente.php?msj=exito');
		exit();
    } else {
        header('Location: ../Vista/Cliente/formularioCliente.php?msj=error');
		exit();
    }
}