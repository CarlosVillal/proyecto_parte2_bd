<?php
include 'ventaBusiness.php';


if(isset($_POST['Insertar'])){

 $ventaId = $_POST['ventaId'];
 $ventaFecha = $_POST['ventaFecha'];
 $ventaTotal = $_POST['ventaTotal']; 
 $empleadoCedula = $_POST['empleadoCedula']; 
 $clienteCedula = $_POST['clienteCedula']; 
 
 $venta = new Venta($ventaId, $ventaFecha, $ventaTotal, $empleadoCedula, $clienteCedula);
 
 $ventaBusiness = new VentaBusiness();
 $resultado = $ventaBusiness->insertar($venta);
 
    if($resultado == 1){
         Header("Location: ../view/vistaventa.php?success=inserted");
     }else{
         Header("Location: ../view/vistaventa.php?error=dbError");
     }    
}



//eliminar registro 
if(isset($_POST['Eliminar'])){

    if (isset($_POST['ventaId'])){
        $id=$_POST['ventaId'];
        
        $ventaBusiness = new VentaBusiness();
        $result = $ventaBusiness->delete($id);
        
        if($result == 1){           
        header("Location: ../view/vistaventa.php?success=deleted");
    }else{       
        header("Location: ../view/vistaventa.php?error=dbError");
    }
    }
}
    


//actualizar registro 
if(isset($_POST['Actualizar'])){

    $ventaId = $_POST['ventaId'];
    $ventaFecha = $_POST['ventaFecha'];
    $ventaTotal = $_POST['ventaTotal']; 
    $empleadoCedula = $_POST['empleadoCedula']; 
    $clienteCedula = $_POST['clienteCedula']; 
    
    $venta = new Venta($ventaId, $ventaFecha, $ventaTotal, $empleadoCedula, $clienteCedula);
    
    $ventaBusiness = new VentaBusiness();
    $resultado = $ventaBusiness->update($venta);
    
        if($resultado == 1){
            Header("Location: ../view/vistaventa.php?success=update");
        }else{
            Header("Location: ../view/vistaventa.php?error=dbError");
        }
    }  


?>