<?php
include 'empleadoBusiness.php';

//insertar registro
if(isset($_POST['Insertar'])){
    
 $emp_cedula = $_POST['emp_cedula'];
 $emp_nombre = $_POST['emp_nombre'];
 $emp_apellido = $_POST['emp_apellido']; 
 $emp_correo = $_POST['emp_correo'];
 $emp_telefono = $_POST['emp_telefono'];
 
 $empleado = new Empleado($emp_cedula, $emp_nombre, $emp_apellido, $emp_correo, $emp_telefono);
 
 $empleadoBusiness = new EmpleadoBusiness();
 $resultado = $empleadoBusiness->insertar($empleado);
 
    if($resultado == 1){
         Header("Location: ../view/vistaempleado.php?success=inserted");
     }else{
         Header("Location: ../view/vistaempleado.php?error=dbError");
     }    
}


//eliminar registro 
if(isset($_POST['Eliminar'])){
    if (isset($_POST['emp_cedula'])){
        $id=$_POST['emp_cedula'];

        $empleadoBusiness = new EmpleadoBusiness();
        $result = $empleadoBusiness->delete($id);
        
        if($result == 1){           
        header("Location: ../view/vistaempleado.php?success=deleted");
    }else{       
        header("Location: ../view/vistaempleado.php?error=dbError");
    }
    }
}    


//actualizar registro 
if(isset($_POST['Actualizar'])){

    $emp_cedula = $_POST['emp_cedula'];
    $emp_nombre = $_POST['emp_nombre'];
    $emp_apellido = $_POST['emp_apellido']; 
    $emp_correo = $_POST['emp_correo'];
    $emp_telefono = $_POST['emp_telefono'];
    
    $empleado = new Empleado($emp_cedula, $emp_nombre, $emp_apellido, $emp_correo, $emp_telefono);
    
    $empleadoBusiness = new EmpleadoBusiness();
    $resultado = $empleadoBusiness->update($empleado);
    
    if($resultado == 1){
        Header("Location: ../view/vistaempleado.php?success=update");
    }else{
        Header("Location: ../view/vistaempleado.php?error=dbError");
    } 


}
?>