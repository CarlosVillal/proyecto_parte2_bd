<?php
include 'venta_productoBusiness.php';

//insertar registro
if(isset($_POST['Insertar'])){
    
 $ven_prod_id = $_POST['ven_prod_id'];
 $productoId = $_POST['productoId'];
 $ventaId = $_POST['ventaId'];
 
 $venta_Producto = new Venta_Producto($ven_prod_id, $productoId, $ventaId);
 
 $venta_ProductoBusiness = new Venta_ProductoBusiness();
 $resultado = $venta_ProductoBusiness->insertar($venta_Producto);
 
    if($resultado == 1){
         Header("Location: ../view/vistaventa_producto.php?success=inserted");
     }else{
         Header("Location: ../view/vistaventa_producto.php?error=dbError");
     }
    
}


//eliminar registro 
if(isset($_POST['Eliminar'])){
    if (isset($_POST['ven_prod_id'])){
        $id=$_POST['ven_prod_id'];

        $venta_ProductoBusiness = new Venta_ProductoBusiness();
        $result = $venta_ProductoBusiness->delete($id);
        
        if($result == 1){           
        header("Location: ../view/vistaventa_producto.php?success=deleted");
    }else{       
        header("Location: ../view/vistaventa_producto.php?error=dbError");
    }
    }
}    


//actualizar registro 
if(isset($_POST['Actualizar'])){

    $ven_prod_id = $_POST['ven_prod_id'];
    $productoId = $_POST['productoId'];
    $ventaId = $_POST['ventaId'];
    
    $venta_Producto = new Venta_Producto($ven_prod_id, $productoId, $ventaId);
    
    $venta_ProductoBusiness = new Venta_ProductoBusiness();
    $resultado = $venta_ProductoBusiness->update($venta_Producto);
    
    if($resultado == 1){
        Header("Location: ../view/vistaventa_producto.php?success=update");
    }else{
        Header("Location: ../view/vistaventa_producto.php?error=dbError");
    } 


}
?>