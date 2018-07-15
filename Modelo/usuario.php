<?php
class Usuario{
    private $id, $email, $contrasena, $tipo, $estado;
    
    function _construct($id, $email, $contrasena, $tipo, $estado){
        setId($id);
        setEmail($email);
        setContrasena($contrasena);
        setTipo($tipo);
        setEstado($estado);
        
    }

    function setId($id){
        $this-> id = $id;
    }

    function getId(){
        return $this-> id;
    }

    function setEmail($email){
        $this-> email = $email;
    }

    function getEmail(){
        return $this-> email;
    }

    function setContrasena($contrasena){
        $this-> contrasena = $contrasena;
    }

    function getContrasena(){
        return $this-> contrasena;
    }

    function setTipo($tipo){
        $this-> tipo = $tipo;
    }

    function getTipo(){
        return $this-> tipo;
    }

    function setEstado($estado){
        $this-> estado = $estado;
    }

    function getEstado(){
        return $this-> estado;
    }


?>