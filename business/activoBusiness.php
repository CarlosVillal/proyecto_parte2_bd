<?php
include '../data/activoData.php';

class ActivoBusiness{

    private $activoData;

    public function ActivoBusiness() {
        $this->activoData= new ActivoData();
    }

    public function insertar($activo) {
        return $this->activoData->insertactivo($activo);
    }

    public function update($activo) {
        return $this->activoData->updateactivo($activo);
    }

    public function delete($id) {
        return $this->activoData->deleteactivo($id);
    }

    public function obtener() {
        return $this->activoData->getactivo();
    }
    
    
    
}
?>