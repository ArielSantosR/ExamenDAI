<?php
require_once '../../Modelo/conexion.php';
require '../../Modelo/analisismuestras.php';

class ControladorMuestras{
    function obtenerMuestrasEmpresa(){
        try{
            global $gbd;

            $query = "SELECT * from analisisMuestras where estado='F'";
            $sentencia = $gbd->prepare($query);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();
            $listaAnalisis = array();
            
            foreach($resultado as $fila){
                $analisis = new AnalisisMuestras();
                $analisis->setIdAnalisisMuestras($fila['idAnalisisMuestras']);
                $analisis->setFechaRecepcion($fila['fechaRecepcion']);
                $analisis->setTemperaturaMuestra($fila['temperaturaMuestra']);
                $analisis->setCantidadMuestra($fila['cantidadMuestra']);
                $analisis->setTipo($fila['tipo']);
                $analisis->setCodigoEmpresa($fila['codigo_empresa']);
                $analisis->setCodigoParticular($fila['codigo_particular']);
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