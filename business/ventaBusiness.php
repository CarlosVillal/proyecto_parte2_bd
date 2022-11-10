<?php
include '../data/ventaData.php';

class VentaBusiness{

    private $ventaData;

    public function VentaBusiness() {
        $this->ventaData = new VentaData();
    }

    public function insertar($venta) {
        return $this->ventaData->insertventa($venta);
    }

    public function update($venta) {
        return $this->ventaData->updateventa($venta);
    }

    public function delete($id) {
        return $this->ventaData->deleteventa($id);
    }

    public function obtener() {
        return $this->ventaData->getventa();
    }
   
    
    
}


?>