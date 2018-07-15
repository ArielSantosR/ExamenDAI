<?php
require_once '../Modelo/conexion.php';

class AnalisisMuestras{
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
                $analisis->setIdAnalisisMuestras($fila['idAnalisisMuestras']);
                $analisis->setFechaRecepcion($fila['fechaRecepcion']);
                $analisis->setTemperaturaMuestra($fila['temperaturaMuestra']);
                $analisis->setCantidadMuestra($fila['cantidadMuestra']);
                $analisis->setTipo($fila['tipo']);
                $analisis->setCodigoEmpresa($fila['codigo_empresa']);
                $analisis->setCodigoParticular($fila['codigo_particular']);
                array_push($analisisMuestras, $analisis);
            }
            return $analisisMuestras;
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