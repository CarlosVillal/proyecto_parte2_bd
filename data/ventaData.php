<?php

include_once 'data.php';
include '../domain/Venta.php';
data::Conexion();
class ventaData extends Data {

    public function insertar($producto) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
       
        $queryInsert = "INSERT INTO tbproducto VALUES (
        ". $producto->get_productoId() . ",'" .
            $producto->get_productoNombre() . "','" .
            $producto->get_productoTipoProducto() . "','" .
            $producto->get_productoPrecio() . "','" .
            $producto->get_productoDetalle() . "');";
      

        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);
        return $result;
    }

    

    public function delete($productoId) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE from tbproducto where tbproductoid =" . $productoId . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function update($producto) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        $queryUpdate = "UPDATE tbproducto 
        SET tbproductonombre='" . $producto->get_productoNombre() .
        "', tbproductotipoproducto='" . $producto->get_productoTipoProducto() .
        "', tbproductoprecio='" . $producto->get_productoprecio() .
        "', tbproductodetalle='" . $producto->get_productoDetalle() .
        "' WHERE tbproductoid = '" . $producto->get_productoId() . "';";

        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }


    public function obtener() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbproducto;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);
        $productos = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentProductos = new producto($row['tbproductoid'], $row['tbproductonombre'], $row['tbproductotipoproducto'], $row['tbproductoprecio'],$row['tbproductodetalle']);
            array_push($productos, $currentProductos);
        }
        
        return $productos;
    }
   
}
