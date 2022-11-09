<?php

include '../data/ventaData.php';

class ventaBusiness{

    private $ventaData;

    public function ventaBusiness() {
        $this->ventaData= new ventaData();
    }

    public function insertar($venta) {
        return $this->ventaData->insertProducto($venta);
    }

    public function update($venta) {
        return $this->ventaData->updateProducto($venta);
    }

    public function delete($id) {
        return $this->ventaData->deleteProducto($id);
    }

    public function obtener() {
        return $this->ventaData->getProducto();
    }

    
    
    
}


?>