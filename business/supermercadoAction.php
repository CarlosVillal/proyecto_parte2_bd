<?php
include 'supermercadoBusiness.php';

//insertar registro
if(isset($_POST['Insertar'])){
    
 $sup_id = $_POST['sup_id'];
 $sup_nombre = $_POST['sup_nombre'];
 $sup_telefono = $_POST['sup_telefono'];
 
 $supermercado = new Supermercado($sup_id, $sup_nombre, $sup_telefono);
 
 $supermercadoBusiness = new SupermercadoBusiness();
 $resultado = $supermercadoBusiness->insertar($supermercado);
 
    if($resultado == 1){
         Header("Location: ../view/vistasupermercado.php?success=inserted");
     }else{
         Header("Location: ../view/vistasupermercado.php?error=dbError");
     }    
}


//eliminar registro 
if(isset($_POST['Eliminar'])){
    if (isset($_POST['sup_id'])){
        $id=$_POST['sup_id'];

        $supermercadoBusiness = new SupermercadoBusiness();
        $result = $supermercadoBusiness->delete($id);
        
        if($result == 1){           
        header("Location: ../view/vistasupermercado.php?success=deleted");
    }else{       
        header("Location: ../view/vistasupermercado.php?error=dbError");
    }
    }
}    


//actualizar registro 
if(isset($_POST['Actualizar'])){

    $sup_id = $_POST['sup_id'];
    $sup_nombre = $_POST['sup_nombre'];
    $sup_telefono = $_POST['sup_telefono'];
    
    $supermercado = new Supermercado($sup_id, $sup_nombre, $sup_telefono);
    
    $supermercadoBusiness = new SupermercadoBusiness();
    $resultado = $supermercadoBusiness->update($supermercado);
    
    if($resultado == 1){
        Header("Location: ../view/vistasupermercado.php?success=update");
    }else{
        Header("Location: ../view/vistasupermercado.php?error=dbError");
    } 

}
?>