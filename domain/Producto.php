
<?php

class Producto{

    private $productoId;
    private $productoNombre;
    private $productoDescripcion;
    private $productoPrecio;
    private $provedorId;
    private $productoNumeroStock;
    
    function Producto($productoId, $productoNombre, $productoDescripcion, $productoPrecio,$provedorId,$productoNumeroStock){
        $this->productoId = $productoId;
        $this->productoNombre = $productoNombre;
        $this->productoDescripcion = $productoDescripcion;
        $this->productoPrecio = $productoPrecio;
        $this->provedorId = $provedorId;
        $this->productoNumeroStock = $productoNumeroStock;
    }

    function getProductoId(){
        return $this->productoId;
    }

    function getProductoNombre(){
        return $this->productoNombre;
    }

    function getProductoDescripcion(){
        return $this->productoDescripcion;
    }

   function getProductoPrecio(){
        return $this->productoPrecio;
    }
    
    function getProvedorId(){
        return $this->provedorId;
    }
    
    function getProductoNumeroStock(){
        return $this->productoNumeroStock;
    }
    function setProductoId($productoId){
        $this->productoId = $productoId;
    }


    function setProductoNombre($productoNombre){
        $this->productoNombre = $productoNombre;
    }

    function setProductoDescripcion($productoDescripcion){
        $this->productoDescripcion = $productoDescripcion;
    }

  
     function setProductoPrecio($productoPrecio){
        $this->productoPrecio = $productoPrecio;
    }

    function setProvedorId($provedorId){
        $this->provedorId = $provedorId;
    }
    function setProductoNumeroStock($productoNumeroStock){
        $this->productoNumeroStock = $productoNumeroStock;
    }

}


?>
