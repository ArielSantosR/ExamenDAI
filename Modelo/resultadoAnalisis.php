<?php
class ResultadoAnalisis{
    private $fechaRegistro, $idResultadoAnalisis, $PPM, $ESTADO, $idAnalisisMuestras;
    
    function _construct($fechaRegistro, $idResultadoAnalisis, $PPM, $ESTADO, $idAnalisisMuestras){
        setFechaRegistro($fechaRegistro);
        setIdResultadoAnalisis($idResultadoAnalisis);
        setPPM($PPM);
        setESTADO($ESTADO);
        setIdAnalisisMuestras($idAnalisisMuestras);
        
    }

    function setFechaRegistro($fechaRegistro){
        $this-> fechaRegistro = $fechaRegistro;
    }

    function getFechaRegistro(){
        return $this-> fechaRegistro;
    }

    function setIdResultadoAnalisis($idResultadoAnalisis){
        $this-> idResultadoAnalisis = $idResultadoAnalisis;
    }

    function getIdResultadoAnalisis(){
        return $this-> idResultadoAnalisis;
    }

    function setPPM($PPM){
        $this-> PPM = $PPM;
    }

    function getPPM(){
        return $this-> PPM;
    }

    function setESTADO($ESTADO){
        $this-> ESTADO = $ESTADO;
    }

    function getESTADO(){
        return $this-> ESTADO;
    }

    function setIdAnalisisMuestras($idAnalisisMuestras){
        $this-> idAnalisisMuestras = $idAnalisisMuestras;
    }

    function getIdAnalisisMuestras(){
        return $this-> idAnalisisMuestras;
    }
    }
?>