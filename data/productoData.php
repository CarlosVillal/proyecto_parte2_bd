<?php

include_once 'data.php';
include '../domain/Producto.php';
data::Conexion();
class ProductoData extends Data {

    public function insertar($precio) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
       
        $queryInsert = "INSERT INTO tbproductoprecio VALUES (
        ". $precio->getProductoid() . ",'".
           $precio->getPrecio() . "');";      

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    

    public function delete($precioId) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbproductoprecio where tbproductoid =" . $precioId . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function update($precio) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbproductoprecio 
        SET tbproductoprecioprecio = '" . $precio->getPrecio().
        "' WHERE tbproductoid = '" . $precio->getProductoid() . "';";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }


    public function obtener() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbproductoprecio;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $precio = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentPrecio = new Precio($row['tbproductoid'], $row['tbproductoprecioprecio']);
            array_push($precio, $currentPrecio);
        }
        
        return $precio;
    }
   
}
