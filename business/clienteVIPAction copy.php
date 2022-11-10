<?php
include 'cilenteVIPBusiness.php';

//insertar registro
if(isset($_POST['Insertar'])){
    
 $cli_cedula = $_POST['cli_cedula'];
 $cli_nombre = $_POST['cli_nombre'];
 $cli_apellido = $_POST['cli_apellido']; 
 $cli_correo = $_POST['cli_correo'];
 $cli_telefono = $_POST['cli_telefono'];
 
 $clientevip = new ClienteVIP($cli_cedula, $cli_nombre, $cli_apellido, $cli_correo, $cli_telefono);
 
 $clientevipBusiness = new ClienteVIPBusiness();
 $resultado = $clientevipBusiness->insertar($clientevip);
 
    if($resultado == 1){
         Header("Location: ../view/vistaclientevip.php?success=inserted");
     }else{
         Header("Location: ../view/vistaclientevip.php?error=dbError");
     }
    
}


//eliminar registro 
if(isset($_POST['Eliminar'])){
    if (isset($_POST['cli_cedula'])){
        $id=$_POST['cli_cedula'];

        $clientevipBusiness = new ClienteVIPBusiness();
        $result = $clientevipBusiness->delete($id);
        
    if($result == 1){           
        header("Location: ../view/vistaclientevip.php?success=deleted");
    }else{       
        header("Location: ../view/vistaclientevip.php?error=dbError");
    }
    }
}    


//actualizar registro 
if(isset($_POST['Actualizar'])){

    $cli_cedula = $_POST['cli_cedula'];
    $cli_nombre = $_POST['cli_nombre'];
    $cli_apellido = $_POST['cli_apellido']; 
    $cli_correo = $_POST['cli_correo'];
    $cli_telefono = $_POST['cli_telefono'];
    
    $clientevip = new ClienteVIP($cli_cedula, $cli_nombre, $cli_apellido, $cli_correo, $cli_telefono);
    
    $clientevipBusiness = new ClienteVIPBusiness();
    $resultado = $clientevipBusiness->update($clientevip);
    
    if($resultado == 1){
        Header("Location: ../view/vistaclientevip.php?success=update");
    }else{
        Header("Location: ../view/vistaclientevip.php?error=dbError");
    } 


}
?>