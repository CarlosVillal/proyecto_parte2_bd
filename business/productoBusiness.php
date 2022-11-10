<?php
include '../data/productoData.php';

class ProductoBusiness{

    private $productoData;

    public function ProductoBusiness() {
        $this->productoData= new ProductoData();
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