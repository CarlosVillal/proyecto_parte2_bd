
<?php

class Venta_Producto{
    private $ven_prod_id;
    private $productoId;
    private $productoId;

    function Venta_Producto($ven_prod_id, $productoId, $productoId){
        $this->ven_prod_id = $ven_prod_id;
        $this->productoId = $productoId;
        $this->productoId = $productoId;
    }

    function getVen_prod_id(){
        return $this->ven_prod_id;
    }

    function setVen_prod_id($ven_prod_id){
        $this->ven_prod_id = $ven_prod_id;
    }

    function getVentaId(){
        return $this->ventaId;
    }

    function setVentaId($ventaId){
        $this->ventaId = $ventaId;
    }

    function getProductoId(){
        return $this->productoId;
    }

    function setProductoId($productoId){
        $this->productoId = $productoId;
    }


}


?>
