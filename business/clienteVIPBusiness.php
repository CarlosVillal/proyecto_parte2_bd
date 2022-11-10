<?php
include '../data/clienteVIPData.php';

class ClienteVIPBusiness{

    private $clienteVIPData;

    public function ClienteVIPBusiness() {
        $this->clienteVIPData= new ClienteVIPData();
    }

    public function insertar($clienteVIP) {
        return $this->clienteVIPData->insertclienteVIP($clienteVIP);
    }

    public function update($clienteVIP) {
        return $this->clienteVIPData->updateclienteVIP($clienteVIP);
    }

    public function delete($id) {
        return $this->clienteVIPData->deleteclienteVIP($id);
    }

    public function obtener() {
        return $this->clienteVIPData->getclienteVIP();
    }
    
    
}
?>