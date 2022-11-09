<?php

class ClienteVIP{

    private $cli_cedula;
    private $cli_nombre;
    private $cli_apellido;
    private $cli_correo;
    private $cli_telefono;

    function ClienteVIP($cli_cedula, $cli_nombre, $cli_apellido,
    $cli_correo, $cli_telefono, $supermercado_id){

        $this->cli_cedula = $cli_cedula;
        $this->cli_nombre = $cli_nombre;
        $this->cli_apellido = $cli_apellido;
        $this->cli_correo = $cli_correo;
        $this->cli_telefono = $cli_telefono;
        $this->supermercado_id = $supermercado_id;
    }

    function getCli_cedula(){
        return $this->cli_cedula;
    }

    function setCli_cedula($cli_cedula){
        $this->cli_cedula = $cli_cedula
    }

    function getCli_nombre(){
        return $this->cli_nombre;
    }

    function setCli_nombre($cli_nombre){
        $this->cli_nombre = $cli_nombre
    }

    function getCli_apellido(){
        return $this->cli_apellido;
    }

    function setCli_apellido($cli_apellido){
        $this->cli_apellido = $cli_apellido
    }

    function getCli_correo(){
        return $this->cli_correo;
    }

    function setCli_correo($cli_correo){
        $this->cli_correo = $cli_correo
    }

    function getCli_telefono(){
        return $this->cli_telefono;
    }

    function setCli_telefono($cli_telefono){
        $this->cli_telefono = $cli_telefono
    }



}

?>