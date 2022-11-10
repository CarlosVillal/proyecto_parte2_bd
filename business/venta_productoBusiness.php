<?php
include '../data/venta_productoData.php';

class Venta_ProductoBusiness{

    private $venta_ProductoData;

    public function Venta_ProductoBusiness() {
        $this->venta_ProductoData = new Venta_ProductoData();
    }

    public function insertar($venta_Producto) {
        return $this->venta_ProductoData->insertventa_Producto($venta_Producto);
    }

    public function update($venta_Producto) {
        return $this->venta_ProductoData->updateventa_Producto($venta_Producto);
    }

    public function delete($id) {
        return $this->venta_ProductoData->deleteventa_Producto($id);
    }

    public function obtener() {
        return $this->venta_ProductoData->getventa_Producto();
    }
    
    
    
}
?>