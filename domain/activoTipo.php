<?php

class ActivoTipo{

    private $tip_id;
    private $tip_nombre;
    private $tip_descripcion;

    function Supermercado($tip_id, $tip_nombre, $tip_descripcion){
        $this->tip_id = $tip_id;
        $this->tip_nombre = $tip_nombre;
        $this->tip_descripcion = $tip_descripcion;
    }

    function getTiptip_id(){
        return $this->tip_id;
    }

    function setTip_id($tip_id){
        $this->tip_id = $tip_id
    }

    function getTip_nombre(){
        return $this->tip_nombre;
    }

    function setTip_nombre($tip_nombre){
        $this->tip_nombre = $tip_nombre
    }

    function getTip_descripcion(){
        return $this->tip_descripcion;
    }

    function setTip_descripcion($tip_descripcion){
        $this->tip_descripcion = $tip_descripcion
    }



}

?>