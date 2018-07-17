<?php
session_start();

require '../Modelo/conexion.php';
$db = new ConexionBD();
global $gbd;

if (!empty($_POST['id'])){
    $id= $_POST['id'];
    $estado = $_POST['estado'];
    $PPM = $_POST['PPM'];
    $fecha = date("Ymd");

    $sql = "INSERT INTO resultadoanalisis (fechaRegistro, PPM, ESTADO, idAnalisisMuestras)
    VALUES (:fecha, :PPM, :ESTADO, :idAnalisisMuestras)";

    $sentencia = $gbd->prepare($sql);
    $sentencia->bindParam(':fecha', $fecha);
    $sentencia->bindParam(':PPM', $PPM);
    $sentencia->bindParam(':ESTADO', $estado);
    $sentencia->bindParam(':idAnalisisMuestras', $id);
    $sentencia->execute();

    if($sentencia->rowcount() > 0) {
        $estado = "A";

        $sql2 = "UPDATE analisismuestras 
        set estado=:estado
        where idAnalisisMuestras=:id";

        $sentencia2 = $gbd->prepare($sql2);
        $sentencia2->bindParam(':estado', $estado);
        $sentencia2->bindParam(':id', $id);
        $sentencia2->execute();
        
        if($sentencia2->rowcount() > 0) {
            header('Location: ../Vista/EmpleadoTecnico/recibeAnalisis.php?msj=exito');
            exit();
        } else {
            header('Location: ../Vista/EmpleadoTecnico/recibeAnalisis.php?msj=error2');
		    exit();
        }        
    } else {
        header('Location: ../Vista/EmpleadoTecnico/recibeAnalisis.php?msj=error');
		exit();
    }
}