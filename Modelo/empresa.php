<?php
class Empresa{
    private $idEmpresa, $rutEmpresa, $nombreEmpresa, $direccionEmpresa, $idUsuario;
    
    function _construct($idEmpresa, $rutEmpresa, $nombreEmpresa, $direccionEmpresa, $idUsuario){
        setIdEmpresa($idEmpresa);
        setRutEmpresa($rutEmpresa);
        setNombreEmpresa($nombreEmpresa);
        setDireccionEmpresa($direccionEmpresa);
        setIdUsuario($idUsuario);
        
    }

    function setIdEmpresa($idEmpresa){
        $this-> idEmpresa = $idEmpresa;
    }

    function getIdEmpresa(){
        return $this-> idEmpresa;
    }

    function setRutEmpresa($rutEmpresa){
        $this-> rutEmpresa = $rutEmpresa;
    }

    function getRutEmpresa(){
        return $this-> rutEmpresa;
    }

    function setNombreEmpresa($nombreEmpresa){
        $this-> nombreEmpresa = $nombreEmpresa;
    }

    function getNombreEmpresa(){
        return $this-> nombreEmpresa;
    }

    function setDireccionEmpresa($direccionEmpresa){
        $this-> direcconEmpresa = $direccionEmpresa;
    }

    function getDireccionEmpresa(){
        return $this-> direccionEmpresa;
    }

    function setIdUsuario($idUsuario){
        $this-> idUsuario = $idUsuario;
    }

    function getIdUsuario(){
        return $this-> idUsuario;
    }


?>