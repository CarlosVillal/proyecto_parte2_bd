<?php

include '../data/productoData.php';

class productoBusiness{

    private $productoData;

    public function productoBusiness() {
        $this->productoData= new productoData();
    }

    public function insertar($producto) {
        return $this->productoData->insertProducto($producto);
    }

    public function update($producto) {
        return $this->productoData->updateProducto($producto);
    }

    public function delete($id) {
        return $this->productoData->deleteProducto($id);
    }

    public function obtener() {
        return $this->productoData->getProducto();
    }

    
    
    
}


?>