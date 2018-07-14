<?php
class AnalisisMuestras{
    private $idAnalisisMuestras, $fechaRecepcion, $temperaturaMuestra, $cantidadMuestra, $tipo, $codigo_empresa, 
    $codigo_particular, $rutEmpleado, $estado;
    
    function _construct($idAnalisisMuestras, $fechaRecepcion){
        setIdAnalisisMuestras($idAnalisisMuestras);
        setFechaRecepcion($fechaRecepcion);
        setTemperaturaMuestra($temperaturaMuestra);
        setCantidadMuestra($cantidadMuestra);
        setTipo($tipo);
        setCodigoEmpresa($codigo_empresa);

    }

    function setID($idAnalisisMuestras=0){
        $this-> idAnalisisMuestras = $idAnalisisMuestras;
    }

    function setfechaRecepcion($idAnalisisMuestras){
        $this -> idAnalisisMuestras = $idAnalisisMuestras;
    }

    function getIdAnalisisMuestras(){
        return $this-> idAnalisisMuestras;
    }

    function getNombre(){
        return $this-> nombre;
    }

function setN    
}