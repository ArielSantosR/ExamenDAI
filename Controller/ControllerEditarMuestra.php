<?php
session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;

if (!empty($_POST['id'])){
    $id= $_POST['id'];
    $estado = "T";
    $cantidad=$_POST['cantidad'];
    $temperatura = $_POST['temperatura'];
    $rutEmpleado = $_POST['rutEmpleado'];
    $fecha = date("Ymd");

    $sql = "UPDATE analisisMuestras
    SET fechaRecepcion=:fecha, temperaturaMuestra=:temperatura, cantidadMuestra=:cantidad, rutEmpleado=:rutEmpleado, estado=:estado
    where idAnalisisMuestras=:id";

    $sentencia = $gbd->prepare($sql);
    $sentencia->bindParam(':fecha', $fecha);
    $sentencia->bindParam(':temperatura', $temperatura);
    $sentencia->bindParam(':cantidad', $cantidad);
    $sentencia->bindParam(':rutEmpleado', $rutEmpleado);
    $sentencia->bindParam(':estado', $estado);
    $sentencia->bindParam(':id', $id);
    $sentencia->execute();
    
    if($sentencia->rowcount() > 0) {
        header('Location: ../Vista/EmpleadoReceptor/recibeMuestra.php?msj=exito');
		exit();
    } else {
        header('Location: ../Vista/EmpleadoReceptor/recibeMuestra.php?msj=error');
		exit();
    }

    
}