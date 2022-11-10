<?php

class Proveedor{

    private $prov_id;
    private $prov_nombre;
    private $prov_correo;
    private $prov_telefono;

    function Proveedor($prov_id, $prov_nombre, $prov_correo, $prov_telefono){

        $this->prov_cedula = $prov_cedula;
        $this->prov_nombre = $prov_nombre;
        $this->prov_correo = $prov_correo;
        $this->prov_telefono = $prov_telefono;
    }

    function getProv_id(){
        return $this->prov_cedula;
    }

    function setProv_id($prov_cedula){
        $this->prov_cedula = $prov_cedula
    }

    function getProv_nombre(){
        return $this->prov_nombre;
    }

    function setProv_nombre($prov_nombre){
        $this->prov_nombre = $prov_nombre
    }

    function getProv_correo(){
        return $this->prov_correo;
    }

    function setProv_correo($prov_correo){
        $this->prov_correo = $prov_correo
    }

    function getProv_telefono(){
        return $this->prov_telefono;
    }

    function setProv_telefono($prov_telefono){
        $this->prov_telefono = $prov_telefono
    }



}

?>