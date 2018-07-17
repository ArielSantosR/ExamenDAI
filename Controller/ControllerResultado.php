<?php
require_once '../../Modelo/resultadoAnalisis.php';  

class ControladorResultado{
    function obtenerResultado($id){
        try{        
            global $gbd;

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
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            return false;
        } 
        $sentencia = null;
        $db = null;
    }
}