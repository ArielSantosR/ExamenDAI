<?php
require_once '../Modelo/conexion.php';

function obtenerMuestrasEmpresa(){
        try{
            global $gbd;

            $query = "SELECT * from analisisMuestras inner join empresa on codigo_empresa = idEmpresa where estado='F'";
            $sentencia = $gbd->prepare($query);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();
            $analisisMuestras = array();
            
            foreach($resultado as $fila){
                $analisis = new AnalisisMuestras();
                $analisis->setIdAnalisisMuestras($fila['id']);
                $analisis->setFechaRecepcion($fila['nombre']);
                $analisis->setTemperaturaMuestra($fila['nombre']);
                $analisis->setCantidadMuestra($fila['cantidad']);
                $analisis->setTipo($fila['tipo']);
                $analisis->setCodigoEmpresa($fila['codigo_empresa']);
                array_push($profesiones, $profesion);
            }
            return $profesiones;
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