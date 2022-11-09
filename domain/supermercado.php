<?php

class Supermercado{

    private $sup_id;
    private $sup_nombre;
    private $sup_telefono;

    function Supermercado($sup_id, $sup_nombre, $sup_telefono){
        $this->sup_id = $sup_id;
        $this->sup_nombre = $sup_nombre;
        $this->sup_telefono = $sup_telefono;
    }

    function getSup_id(){
        return $this->sup_id;
    }

    function setSup_id($sup_id){
        $this->sup_id = $sup_id
    }

    function getSup_nombre(){
        return $this->sup_nombre;
    }

    function setSup_nombre($sup_nombre){
        $this->sup_nombre = $sup_nombre
    }

    function getSup_telefono(){
        return $this->sup_telefono;
    }

    function setSup_telefono($sup_telefono){
        $this->sup_telefono = $sup_telefono
    }



}

?>