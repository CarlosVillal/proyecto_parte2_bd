<?php
include 'productoBusiness.php';

//insertar registro
if(isset($_POST['Insertar'])){

 $productoId = $_POST['productoId'];
 $productoNombre = $_POST['productoNombre'];
 $productoDescripcion = $_POST['productoDescripcion']; 
 $productoPrecio = $_POST['productoPrecio'];
 $provedorId = $_POST['provedorId'];
 $productoNumeroStock = $_POST['productoNumeroStock'];
 
 $producto = new Producto($productoId, $productoNombre, $productoDescripcion, $productoPrecio,
$provedorId, $productoNumeroStock);
 
 $productoBusiness = new ProductoBusiness();
 $resultado = $productoBusiness->insertar($producto);
 
    if($resultado == 1){
         Header("Location: ../view/vistaproducto.php?success=inserted");
    }else{
         Header("Location: ../view/vistaproducto.php?error=dbError");
    }    
}


//eliminar registro 
if(isset($_POST['Eliminar'])){

    if (isset($_POST['productoId'])){
        $id=$_POST['productoId'];
        
        $productoBusiness = new ProductoBusiness();
        $result = $productoBusiness->delete($id);
        
    if($result == 1){           
        header("Location: ../view/vistaproducto.php?success=deleted");
    }else{       
        header("Location: ../view/vistaproducto.php?error=dbError");
    }
    }
}
    


//actualizar registro 
if(isset($_POST['Actualizar'])){

    $productoId = $_POST['productoId'];
    $productoNombre = $_POST['productoNombre'];
    $productoDescripcion = $_POST['productoDescripcion']; 
    $productoPrecio = $_POST['productoPrecio'];
    $provedorId = $_POST['provedorId'];
    $productoNumeroStock = $_POST['productoNumeroStock'];
    
$producto = new Producto($productoId, $productoNombre, $productoDescripcion, $productoPrecio,
   $provedorId, $productoNumeroStock);
    
    $productoBusiness = new ProductoBusiness();
    $resultado = $productoBusiness->update($producto);
    
        if($resultado == 1){
            Header("Location: ../view/vistaproducto.php?success=update");
        }else{
            Header("Location: ../view/vistaproducto.php?error=dbError");
        }
    } 


?>