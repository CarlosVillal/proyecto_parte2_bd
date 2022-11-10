<?php
include 'productoBusiness.php';

//insertar registro
if(isset($_POST['Insertar'])){
    
 $act_id = $_POST['act_id'];
 $act_nombre = $_POST['act_nombre'];
 $act_descripcion = $_POST['act_descripcion']; 
 $tipo_activo_id = $_POST['tipo_activo_id'];
 
 $activo = new Activo($act_id,$act_nombre, $act_descripcion, $tipo_activo_id);
 
 $activoBusiness = new ActivoBusiness();
 $resultado = $activoBusiness->insertar($activo);
 
    if($resultado == 1){
         Header("Location: ../view/vistaactivo.php?success=inserted");
     }else{
         Header("Location: ../view/vistaactivo.php?error=dbError");
     }
    
}


//eliminar registro 
if(isset($_POST['Eliminar'])){
    if (isset($_POST['act_id'])){
        $id=$_POST['act_id'];

        $activoBusiness = new ActivoBusiness();
        $result = $activoBusiness->delete($id);
        
        if($result == 1){           
        header("Location: ../view/vistaactivo.php?success=deleted");
    }else{       
        header("Location: ../view/vistaactivo.php?error=dbError");
    }
    }
}    


//actualizar registro 
if(isset($_POST['Actualizar'])){

    $act_id = $_POST['act_id'];
    $act_nombre = $_POST['act_nombre'];
    $act_descripcion = $_POST['act_descripcion']; 
    $tipo_activo_id = $_POST['tipo_activo_id'];
    
    $activo = new Activo($act_id,$act_nombre, $act_descripcion, $tipo_activo_id);
    
    $activoBusiness = new ActivoBusiness();
    $resultado = $activoBusiness->update($activo);
    
    if($resultado == 1){
        Header("Location: ../view/vistaactivo.php?success=update");
    }else{
        Header("Location: ../view/vistaactivo.php?error=dbError");
    } 


}
?>