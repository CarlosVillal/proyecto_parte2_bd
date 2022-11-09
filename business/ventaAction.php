<?php

include 'ventaBusiness.php';


if(isset($_POST['insertar'])){
    if (isset($_POST['fecha']) && isset($_POST['observacion']) && isset($_POST['estado'])
) {
 $fecha = $_POST['fecha'];
 $observacion = $_POST['observacion'];
 $estado = $_POST['estado'];
 
 
 $cita = new Cita(0,$fecha, $observacion, $estado);
 
 $CitaBusiness = new CitaBusiness();
 $resultado = $CitaBusiness->insertar($cita);
 
    if($resultado == 1){
         Header("Location: ../views/vistacita.php?success=inserted");
     }else{
         Header("Location: ../views/vistacita.php?error=dbError");
     }


    }


}



//$metodoAction ==2, es eliminar un registro 
if(isset($_POST['Eliminar'])){

    if (isset($_POST['idcita'])){
        $id=$_POST['idcita'];
        $CitaBusiness = new CitaBusiness();

        $result = $CitaBusiness->delete($id);
        
        if($result == 1){
           
        header("Location: ../views/vistacita.php?success=deleted");
    }else{
       
        header("Location: ../views/vistacita.php?error=dbError");
    }
    }
}
    





//$metodoAction == 3, es actualizar un registro 

if(isset($_POST['Actualizar'])){

    if (isset($_POST['fecha']) && isset($_POST['observacion']) && isset($_POST['estado'])
) 
    
     {
        $idcita=$_POST['idcita'];
        $fecha = $_POST['fecha'];
        $observacion = $_POST['observacion'];
        $estado = $_POST['estado'];
    
        $cita = new Cita($idcita, $fecha, $observacion, $estado);
    
        $CitaBusiness = new CitaBusiness();
        $resultado = $CitaBusiness->update($cita);
    
        if($resultado == 1){
            Header("Location: ../views/vistacita.php?success=update");
        }else{
            Header("Location: ../views/vistacita.php?error=dbError");
        }
    }

   
    if(!isset($_POST['buscar'])){
        $_POST['buscar'] = "";
        $buscar = $_POST['buscar'];
    }
    
    if(isset($_POST['buscar'])){
        $buscar = $_POST['buscar'];
        $ClienteBusiness = new ClienteBusiness();
    
        $result = $ClienteBusiness->search($buscar);
        
        if($result == 1){
           
        header("Location: ../views/vistacliente.php?success=deleted");
    }else{
       
        header("Location: ../views/vistacliente.php?error=dbError");
    }
    }
    




}
?>