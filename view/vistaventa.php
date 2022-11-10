<?php 
  include '../business/ventaBusiness.php'; 
  include '../business/clienteVIPBusiness.php'; 
  include '../business/empleadoBusiness.php'; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Venta</title>
</head>
<body>

	 <form method="POST"  id="venta" action="../business/ventaAction.php">  
                          <div class="table-responsive">  
                               <table class="table table-bordered"> 


        
    
                       
        <td><input type="number" id="ventaId" name="ventaId" placeholder="ID Venta" required></td>
        <td><input type="text" id="ventaFecha" name="ventaFecha" placeholder="Fecha venta" required></td>
        <td><input type="text" id="ventaTotal" name="ventaTotal" placeholder="Venta Total" required></td>
        <td><p>Empleado:<select id="empleadoCedula" name="empleadoCedula" required >
                                
                                <?php
                             $empleadoBusiness = new empleadoBusiness();
                             $empleados = $empleadoBusiness->obtener();
                             foreach ($empleados as $row) {                                
                               echo '<option value="'. $row->getEmp_nombre(). '">'. $row->getEmp_cedula(). ' - '. $row->getEmp_nombre(). '</option>';                                
                             }
                             ?>
                             </select></td>
                             <td><p>Cliente VIP:<select id="clienteCedula" name="clienteCedula" required >
                                
                                <?php
                             $clienteVIPBusiness = new clienteVIPBusiness();
                             $clientesVIP = $clienteVIPBusiness->obtener();
                             foreach ($clientesVIP as $row) {                                
                               echo '<option value="'. $row->getCli_nombre(). '">'. $row->getCli_cedula(). ' - '. $row->getCli_nombre(). '</option>';                                
                             }
                             ?>
                             </select></td>
       
        <td><input type="number" id="empleadoCedula" name="empleadoCedula" placeholder="Cedula Empleado" required></td>
        <td><input type="number" id="clienteCedula" name="clienteCedula" placeholder="Cliente Cedula" required></td>
        
                      <td><input onclick="return confirm('Seguro que desea almacenar los datos?')" type="submit" value="Registrar" name="Insertar" id="Insertar"/> </td>

                        </table>  
                        </div>  
                        </form>
                        <br><br><br>

                <table class="table table-striped table-bordered" >
                  <thead>
                    <tr>
                      <th>ID Venta</th>
                      <th>Fecha Venta</th>
                      <th>Total Venta</th>
                      <th>Empleado Cedula</th>
                      <th>Cliente Cedula</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   $ventaBusiness = new ventaBusiness();
                   $ventas = $ventaBusiness->obtener();
                   foreach ($ventas as $row) {
                    echo '<form  method="post" enctype="multipart/form-data" action="../business/ventaAction.php">';
                    echo '<input type="hidden" name="ventaId" value="'. $row->getVentaId().'">';
                            echo '<tr>';
                            echo '<td><input readonly type="number" name="ventaId" id="ventaId" value="' . $row->getVentaId() . '"/></td>';
                            echo '<td><input  type="text" id="ventaFecha" name="ventaFecha" value="' . $row->getVentaFecha() . '"/></td>';
                            echo '<td><input  type="text" id="ventaTotal" name="ventaTotal" value="' . $row->getVentaTotal() . '"/></td>';
                            echo '<td><input  type="text" id="empleadoCedula" name="empleadoCedula"  value="' . $row->getEmpleadoCedula() . '"/></td>';
                            echo '<td><input  type="text" id="clienteCedula" name="clienteCedula"  value="' . $row->getClienteCedulad() . '"/></td>';
                          
                         ?>   
                            <td><input type="submit" value="Actualizar" name="Actualizar" id="update" onclick="return confirm('Seguro que desea guardar los cambios?')" /></td>
                            <td><input type="submit" value="Eliminar" name="Eliminar" id="delete" onclick="return confirm('Seguro que desea eliminar el registro?')" /></td>
                         <?php  
                         
                            echo '</tr>';
                            echo '</form>';       
                   }
                                      
                  ?>
                  </tbody>
            </table>
            <?php
            echo '</br></br><td><button name="Volver" id="volver"><a href="../">Volver</a></button></td><br>';
            ?>

</script>
</body>
</html>