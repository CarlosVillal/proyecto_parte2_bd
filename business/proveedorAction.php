<?php
include 'proveedorBusiness.php';

//insertar registro
if(isset($_POST['Insertar'])){
    
 $prov_id = $_POST['prov_id'];
 $prov_nombre = $_POST['prov_nombre'];
 $prov_correo = $_POST['prov_correo']; 
 $prov_telefono = $_POST['prov_telefono'];
 
 $proveedor = new Proveedor($prov_id, $prov_nombre, $prov_correo, $prov_telefono);
 
 $proveedorBusiness = new ProveedorBusiness();
 $resultado = $proveedorBusiness->insertar($proveedor);
 
    if($resultado == 1){
         Header("Location: ../view/vistaproveedor.php?success=inserted");
     }else{
         Header("Location: ../view/vistaproveedor.php?error=dbError");
     }
    
}


//eliminar registro 
if(isset($_POST['Eliminar'])){
    if (isset($_POST['prov_id'])){
        $id=$_POST['prov_id'];

    $proveedorBusiness = new ProveedorBusiness();
    $result = $proveedorBusiness->delete($id);
        
    if($result == 1){           
        header("Location: ../view/vistaproveedor.php?success=deleted");
    }else{       
        header("Location: ../view/vistaproveedor.php?error=dbError");
    }
    }
}    


//actualizar registro 
if(isset($_POST['Actualizar'])){

    $prov_id = $_POST['prov_id'];
    $prov_nombre = $_POST['prov_nombre'];
    $prov_correo = $_POST['prov_correo']; 
    $prov_telefono = $_POST['prov_telefono'];
    
    $proveedor = new Proveedor($prov_id, $prov_nombre, $prov_correo, $prov_telefono);
    
    $proveedorBusiness = new ProveedorBusiness();
    $resultado = $proveedorBusiness->update($proveedor);
    
    if($resultado == 1){
        Header("Location: ../view/vistaproveedor.php?success=update");
    }else{
        Header("Location: ../view/vistaproveedor.php?error=dbError");
    } 


}
?>