<?php
class Empleado{
    private $idEmpleado, $rol, $nombreEmpleado, $idUsuario, $rutEmpleado;
    
    function _construct($idEmpleado, $rol, $nombreEmpleado, $idUsuario, $rutEmpleado){
        setIdEmpleado($idEmpleado);
        setRol($rol);
        setNombreEmpleado($nombreEmpleado);
        setIdUsuario($idUsuario);
        setRutEmpleado($rutEmpleado);
        
    }

    function setIdEmpleado($idEmpleado){
        $this-> idEmpleado = $idEmpleado;
    }

    function getIdEmpleado(){
        return $this-> idEmpleado;
    }

    function setRol($rol){
        $this-> rol = $rol;
    }

    function getRol(){
        return $this-> rol;
    }

    function setNombreEmpleado($nombreEmpleado){
        $this-> nombreEmpleado = $nombreEmpleado;
    }

    function getNombreEmpleado(){
        return $this-> nombreEmpleado;
    }

    function setIdUsuario($idUsuario){
        $this-> idUsuario = $idUsuario;
    }

    function getIdUsuario(){
        return $this-> idUsuario;
    }

    function setRutEmpleado($rutEmpleado){
        $this-> rutEmpleado = $rutEmpleado;
    }

    function getRutEmpleado(){
        return $this-> rutEmpleado;
    }


?>