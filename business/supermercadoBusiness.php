<?php
include '../data/supermercadoData.php';

class SupermercadoBusiness{

    private $supermercadoData;

    public function SupermercadoBusiness() {
        $this->supermercadoData = new SupermercadoData();
    }

    public function insertar($supermercado) {
        return $this->supermercadoData->insertsupermercado($supermercado);
    }

    public function update($supermercado) {
        return $this->supermercadoData->updatesupermercado($supermercado);
    }

    public function delete($id) {
        return $this->supermercadoData->deletesupermercado($id);
    }

    public function obtener() {
        return $this->supermercadoData->getsupermercado();
    }
    
    
    
}
?>