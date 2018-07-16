<?php
class AnalisisMuestras{
    private $idAnalisisMuestras, $fechaRecepcion, $temperaturaMuestra, $cantidadMuestra, $tipo, $codigo_empresa, 
    $codigo_particular, $rutEmpleado, $estado;
    
    function _construct($idAnalisisMuestras, $fechaRecepcion, $temperaturaMuestra, $cantidadMuestra, $tipo, $codigo_empresa, $codigo_particular){
        setIdAnalisisMuestras($idAnalisisMuestras);
        setFechaRecepcion($fechaRecepcion);
        setTemperaturaMuestra($temperaturaMuestra);
        setCantidadMuestra($cantidadMuestra);
        setTipo($tipo);
        setCodigoEmpresa($codigo_empresa);
        setCodigoParticular($codigo_particular);
    }

    function setIdAnalisisMuestras($idAnalisisMuestras=0){
        $this-> idAnalisisMuestras = $idAnalisisMuestras;
    }

    function setFechaRecepcion($fechaRecepcion){
        $this-> fechaRecepcion = $fechaRecepcion;
    }

    function getIdAnalisisMuestras(){
        return $this-> idAnalisisMuestras;
    }

    function getNombre(){
        return $this-> nombre;
    }

    function setTemperaturaMuestra($temperaturaMuestra){
        $this-> temperaturaMuestra = $temperaturaMuestra;
    }

    function getTemperaturaMuestra(){
        return $this-> temperaturaMuestra;
    }

    function setCantidadMuestra($cantidadMuestra){
        $this-> cantidadMuestra = $cantidadMuestra;
    }

    function getCantidadMuestra(){
        return $this-> cantidadMuestra;
    }

    function setTipo($tipo){
        $this-> tipo = $tipo;
    }

    function getTipo(){
        return $this-> tipo;
    }

    function setCodigoEmpresa($codigo_empresa){
        $this-> codigo_empresa = $codigo_empresa;
    }

    function getCodigoEmpresa(){
        return $this-> codigo_empresa;
    }

    function setCodigoParticular($codigo_particular){
        $this -> codigo_particular = $codigo_particular;
    }

    function getCodigoParticular(){
        return $this-> codigo_particular;
    }

    function setRutEmpleado($rutEmpleado){
        $this -> rutEmpleado = $rutEmpleado;
    }

    function getRutEmpleado(){
        return $this-> RutEmpleado;
    }
    function setEstado($estado){
        $this-> estado = $estado;
    }

    function getEstado(){
        return $this-> estado;
    }    
}