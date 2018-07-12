<?php
class UsuarioC{
    private $id, $email, $contrasena;
    
    function _construct($id, $email, $contrasena){
        
        setID($id);
        setEmail($email);
        setContrasena($contrasena);
    }

    function setID($id=0){
        $this-> id = $id;
    }

    function setEmail($email){
        
        $this -> email = $email;
    }

    function setContrasena($contrasena){
        
        $this -> contrasena = $contrasena;
    }

    function getID(){
        return $this-> id;
    }

    function getEmail(){
        return $this-> email;
    }

    function getContrasena(){
        return $this-> contrasena;
    }
}