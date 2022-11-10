<?php
include '../data/proveedorData.php';

class ProveedorBusiness{

    private $proveedorData;

    public function ProveedorBusiness() {
        $this->proveedorData= new ProveedorData();
    }

    public function insertar($proveedor) {
        return $this->proveedorData->insertproveedor($proveedor);
    }

    public function update($proveedor) {
        return $this->proveedorData->updateproveedor($proveedor);
    }

    public function delete($id) {
        return $this->proveedorData->deleteproveedor($id);
    }

    public function obtener() {
        return $this->proveedorData->getproveedor();
    }
    
    
    
}
?>