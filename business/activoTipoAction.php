<?php
include 'productoBusiness.php';

//insertar registro
if(isset($_POST['Insertar'])){
    
 $tipoActivoId = $_POST['tipoActivoId'];
 $tipoActivoNombre = $_POST['tipoActivoNombre'];
 $tipoActivoDescripcion = $_POST['tipoActivoDescripcion']; 
 
 $activoTipo = new ActivoTipo($tipoActivoId, $tipoActivoNombre, $tipoActivoDescripcion);
 
 $activoTipoBusiness = new ActivoTipoBusiness();
 $resultado = $activoTipoBusiness->insertar($activoTipo);
 
    if($resultado == 1){
         Header("Location: ../view/vistaActivoTipo.php?success=inserted");
     }else{
         Header("Location: ../view/vistaActivoTipo.php?error=dbError");
     }    
}


//eliminar registro 
if(isset($_POST['Eliminar'])){
    if (isset($_POST['tipoActivoId'])){
        $id=$_POST['tipoActivoId'];

        $activoTipoBusiness = new ActivoTipoBusiness();
        $result = $activoTipoBusiness->delete($id);
        
        if($result == 1){           
        header("Location: ../view/vistaActivoTipo.php?success=deleted");
    }else{       
        header("Location: ../view/vistaActivoTipo.php?error=dbError");
    }
    }
}    


//actualizar registro 
if(isset($_POST['Actualizar'])){

    $tipoActivoId = $_POST['tipoActivoId'];
    $tipoActivoNombre = $_POST['tipoActivoNombre'];
    $tipoActivoDescripcion = $_POST['tipoActivoDescripcion']; 
    
    $activoTipo = new ActivoTipo($tipoActivoId, $tipoActivoNombre, $tipoActivoDescripcion);
    
    $activoTipoBusiness = new ActivoTipoBusiness();
    $resultado = $activoTipoBusiness->update($activoTipo);
    
    if($resultado == 1){
        Header("Location: ../view/vistaActivoTipo.php?success=update");
    }else{
        Header("Location: ../view/vistaActivoTipo.php?error=dbError");
    } 


}
?>