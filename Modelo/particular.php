<?php
class Particular{
    private $idParticular, $rutParticular, $nombreParticular, $direccionParticular, $telefonoParticular, $idUsuario;
    
    function _construct($idParticular, $rutParticular, $nombreParticular, $direccionParticular, $telefonoParticular, $idUsuario){
        setIdParticular($idParticular);
        setRutParticular($rutParticular);
        setNombreParticular($nombreParticular);
        setDireccionParticular($direccionParticular);
        setTelefonoParticular($telefonoParticular);
        setIdUsuario($idUsuario);
        
    }

    function setIdParticular($idParticular){
        $this-> idParticular = $idParticular;
    }

    function getIdParticular(){
        return $this-> idParticular;
    }

    function setRutParticular($rutParticular){
        $this-> rutParticular = $rutParticular;
    }

    function getRutParticular(){
        return $this-> rutParticular;
    }

    function setNombreParticular($nombreParticular){
        $this-> nombreParticular = $nombreParticular;
    }

    function getNombreParticular(){
        return $this-> nombreParticular;
    }

    function setDireccionParticular($direccionParticular){
        $this-> direcconParticular = $direccionParticular;
    }

    function getDireccionParticular(){
        return $this-> direccionParticular;
    }

    function setTelefonoParticular($telefonoParticular){
        $this-> telefonoParticular = $telefonoParticular;
    }

    function getTelefonoParticular(){
        return $this-> telefonoParticular;
    }

    function setIdUsuario($idUsuario){
        $this-> idUsuario = $idUsuario;
    }

    function getIdUsuario(){
        return $this-> idUsuario;
    }


?>