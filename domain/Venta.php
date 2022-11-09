
<?php

class Venta{

    private $ventaId;
    private $ventaFecha;
    private $ventaTotal;
    private $empleadoCedula;
    private $clienteCedula;

    function Venta($ventaId, $ventaFecha, $ventaTotal, $empleadoCedula, $clienteCedula){
        $this->ventaId = $ventaId;
        $this->ventaFecha = $ventaFecha;
        $this->ventaTotal = $ventaTotal;
        $this->empleadoCedula = $empleadoCedula;
        $this->clienteCedula = $clienteCedula;

    }

    function getVentaId(){
        return $this->ventaId;
    }

    function getVentaFecha(){
        return $this->ventaFecha;
    }

    function getVentaTotal(){
        return $this->ventaTotal;
    }

   function getEmpleadoCedula(){
        return $this->empleadoCedula;
    }
    function getClienteCedula(){
        return $this->clienteCedula;
    }
    
    
    function setVentaId($ventaId){
        $this->ventaId = $ventaId;
    }


    function setVentaFecha($ventaFecha){
        $this->ventaFecha = $ventaFecha;
    }

    function setVentaTotal($ventaTotal){
        $this->ventaTotal = $ventaTotal;
    }

  
     function setEmpleadoCedula($empleadoCedula){
        $this->empleadoCedula = $empleadoCedula;
    }
    function setClienteCedula($clienteCedula){
        $this->clienteCedula = $clienteCedula;
    }


}


?>
