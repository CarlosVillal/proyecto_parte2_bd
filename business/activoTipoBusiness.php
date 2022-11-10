<?php
include '../data/activoTipoData.php';

class ActivoTipoBusiness{

    private $activoTipoData;

    public function ActivoTipoBusiness() {
        $this->activoTipoData= new ActivoTipoData();
    }

    public function insertar($activoTipo) {
        return $this->activoTipoData->insertactivoTipo($activoTipo);
    }

    public function update($activoTipo) {
        return $this->activoTipoData->updateactivoTipo($activoTipo);
    }

    public function delete($id) {
        return $this->activoTipoData->deleteactivoTipo($id);
    }

    public function obtener() {
        return $this->activoTipoData->getactivoTipo();
    }
    
    
    
}
?>