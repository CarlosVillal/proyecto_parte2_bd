<?php
include '../data/empleadoData.php';

class EmpleadoBusiness{

    private $empleadoData;

    public function EmpleadoBusiness() {
        $this->empleadoData= new EmpleadoData();
    }

    public function insertar($empleado) {
        return $this->empleadoData->insertempleado($empleado);
    }

    public function update($empleado) {
        return $this->empleadoData->updateempleado($empleado);
    }

    public function delete($id) {
        return $this->empleadoData->deleteempleado($id);
    }

    public function obtener() {
        return $this->empleadoData->getempleado();
    }   
    
    
}
?>