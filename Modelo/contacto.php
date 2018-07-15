<?php
class Contacto{
    private $rutContacto, $nombreContacto, $emailContacto, $telefonoContacto, $idEmpresaC;
    
    function _construct($rutContacto, $nombreContacto, $emailContacto, $telefonoContacto, $idEmpresaC){
        setRutContacto($rutContacto);
        setNombreContacto($nombreContacto);
        setEmailContacto($emailContacto);
        setTelefonoContacto($telefonoContacto);
        setIdEmpresaC($idEmpresaC);
        
    }

    function setRutContacto($rutContacto){
        $this-> rutContacto = $rutContacto;
    }

    function getRutContacto(){
        return $this-> rutContacto;
    }

    function setNombreContacto($nombreContacto){
        $this-> nombreContacto = $nombreContacto;
    }

    function getNombreContacto(){
        return $this-> nombreContacto;
    }

    function setEmailContacto($emailContacto){
        $this-> emailContacto = $emailContacto;
    }

    function getEmailContacto(){
        return $this-> emailContacto;
    }

    function setTelefonoContacto($telefonoContacto){
        $this-> telefonoContacto = $telefonoContacto;
    }

    function getTelefonoContacto(){
        return $this-> telefonoContacto;
    }

    function setIdEmpresaC($idEmpresaC){
        $this-> idEmpresaC = $idEmpresaC;
    }

    function getIdEmpresaC(){
        return $this-> idEmpresaC;
    }
}