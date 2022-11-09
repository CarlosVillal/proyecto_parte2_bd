<?php

class Activo{

    private $act_id;
    private $act_nombre;
    private $act_descripcion;
    private $tipo_activo_id;

    function Supermercado($act_id, $act_nombre, $act_descripcion, $tipo_activo_id){
        $this->act_id = $act_id;
        $this->act_nombre = $act_nombre;
        $this->act_descripcion = $act_descripcion;
        $this->tipo_activo_id = $tipo_activo_id;
    }

    function getAct_id(){
        return $this->act_id;
    }

    function setAct_id($act_id){
        $this->act_id = $act_id
    }

    function getAct_nombre(){
        return $this->act_nombre;
    }

    function setAct_nombre($act_nombre){
        $this->act_nombre = $act_nombre
    }

    function getAct_descripcion(){
        return $this->act_descripcion;
    }

    function setAct_descripcion($act_descripcion){
        $this->act_descripcion = $act_descripcion
    }

    function getTipo_activo_id(){
        return $this->tipo_activo_id;
    }

    function setTipo_activo_id($tipo_activo_id){
        $this->tipo_activo_id = $tipo_activo_id
    }

    



}

?>