<?php
require_once '../Modelo/conexion.php';

function obtenerMuestrasEmpresa(){
        try{
            global $gbd;

            $query = "SELECT * from analisisMuestras  inner join empresa on codigo_empresa = idEmpresa where estado='F'";
            $sentencia = $gbd->prepare($query);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();
            $analisisMuestras = array();
            
            foreach($resultado as $fila){
                $analisis = new AnalisisMuestras();
                $analisis->setID($fila['id']);
                $profesion->setNombre($fila['nombre']);
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