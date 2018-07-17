<?php
session_start();

require '../Modelo/conexion.php';
require_once '../Modelo/resultadoAnalisis.php';
$db = new ConexionBD();
global $gbd;

function obtenerResultado(){
    try{
        $id = $_POST['id'];
        
        $query = "select * from resultadoanalisis where idAnalisisMuestras = :id";
        $sentencia = $gbd->prepare($query);
        $sentencia->bindParam(':id', $id);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        $listaAnalisis = array();
        
        foreach($resultado as $fila){
            $analisis = new ResultadoAnalisis();
            $analisis->setFechaRegistro($fila['fechaRegistro']);
            $analisis->setIdResultadoAnalisis($fila['idResultadoAnalisis']);
            $analisis->setPPM($fila['PPM']);
            $analisis->setESTADO($fila['ESTADO']);
            $analisis->setIdAnalisisMuestras($fila['idAnalisisMuestras']);
            array_push($listaAnalisis, $analisis);
        }
        return $listaAnalisis;

        if($analisis->rowcount() > 0) {
            header('Location: ../Vista/Cliente/detalle.php?msj=exito');
            exit();
        } else {
            header('Location: ../Vista/Cliente/detalle.php?msj=error');
            exit();
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        return false;
    } 
    $sentencia = null;
    $db = null;
}