<?php

class Empleado{

    private $emp_cedula;
    private $emp_nombre;
    private $emp_apellido;
    private $emp_correo;
    private $emp_telefono;
    private $supermercado_id;

    function Supermercado($emp_cedula, $emp_nombre, $emp_apellido,
    $emp_correo, $emp_telefono, $supermercado_id){

        $this->emp_cedula = $emp_cedula;
        $this->emp_nombre = $emp_nombre;
        $this->emp_apellido = $emp_apellido;
        $this->emp_correo = $emp_correo;
        $this->emp_telefono = $emp_telefono;
        $this->supermercado_id = $supermercado_id;
    }

    function getEmp_cedula(){
        return $this->emp_cedula;
    }

    function setEmp_cedula($emp_cedula){
        $this->emp_cedula = $emp_cedula
    }

    function getEmp_nombre(){
        return $this->emp_nombre;
    }

    function setEmp_nombre($emp_nombre){
        $this->emp_nombre = $emp_nombre
    }

    function getEmp_apellido(){
        return $this->emp_apellido;
    }

    function setEmp_apellido($emp_apellido){
        $this->emp_apellido = $emp_apellido
    }

    function getEmp_correo(){
        return $this->emp_correo;
    }

    function setEmp_correo($emp_correo){
        $this->emp_correo = $emp_correo
    }

    function getEmp_telefono(){
        return $this->emp_telefono;
    }

    function setEmp_telefono($emp_telefono){
        $this->emp_telefono = $emp_telefono
    }

    function getSupermercado_id(){
        return $this->supermercado_id;
    }

    function setSupermercado_id($supermercado_id){
        $this->supermercado_id = $supermercado_id
    }



}

?>