<?php
require_once '../../Modelo/conexion.php';
require '../../Modelo/analisismuestras.php';

class ControladorMuestras{

    function obtenerMuestrasCliente(){
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

    function obtenerMuestrasRecibidas(){
        try{
            global $gbd;

            $query = "SELECT * from analisisMuestras where estado='T'";
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

    function obtenerMuestrasEmpresa($id){
        try{
            global $gbd;

            $query = "select * from analisismuestras inner join empresa on codigo_empresa = idEmpresa where idEmpresa = :id;";
            $sentencia = $gbd->prepare($query);
            $sentencia->bindParam(':id', $id);
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
                $analisis->setEstado($fila['estado']);
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

    function obtenerMuestrasParticular($id){
        try{
            global $gbd;

            $query = "select * from analisismuestras inner join particular on codigo_particular = idParticular where idParticular = :id";
            $sentencia = $gbd->prepare($query);
            $sentencia->bindParam(':id', $id);
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
                $analisis->setEstado($fila['estado']);
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

    function obtenerMuestrasId($id){
        try{
            global $gbd;

            $query = "select * from analisismuestras where idAnalisisMuestras = :id";
            $sentencia = $gbd->prepare($query);
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();
            
            foreach($resultado as $fila){
                $analisis = new AnalisisMuestras();
                $analisis->setIdAnalisisMuestras($fila['idAnalisisMuestras']);
                $analisis->setFechaRecepcion($fila['fechaRecepcion']);
                $analisis->setTemperaturaMuestra($fila['temperaturaMuestra']);
                $analisis->setCantidadMuestra($fila['cantidadMuestra']);
                $analisis->setTipo($fila['tipo']);
                $analisis->setCodigoEmpresa($fila['codigo_empresa']);
                $analisis->setCodigoParticular($fila['codigo_particular']);
                $analisis->setEstado($fila['estado']);
            }
            return $analisis;
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