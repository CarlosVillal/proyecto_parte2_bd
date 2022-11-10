<?php
include '../business/activoBusiness.php';
include '../business/activoTipoProductoBusiness.php';
?>

<!DOCTYPE html>
<head>
  <title>Activos</title>
</head>

<body>

  <form method="POST" id="ActivoForm" action="../business/activoAction.php">
    <div class="table-responsive">
      <table class="table table-bordered">

      

        <td><input type="number" id="act_id" name="act_id" placeholder="ID Activo" required></td>
        <td><input type="text" id="act_nombre" name="act_nombre" placeholder="Nombre Activo" required></td>
        <td><input type="text" id="act_descripcion" name="act_descripcion" placeholder="Descripción Activo" required></td>
        <td><p>Tipo Activo:<select id="tipo_activo_id" name="tipo_activo_id" required >
                                
                                <?php
                             $activoTipoBusiness = new activoTipoBusiness();
                             $activosTipo = $activoTipoBusiness->obtener();
                             foreach ($activosTipo as $row) {                                
                               echo '<option value="'. $row->getTip_nombre(). '">'. $row->getTiptip_id(). ' - '. $row->getTip_nombre(). '</option>';                                
                             }
                             ?>
                             </select></td>    

        <td><input onclick="return confirm('Seguro que desea almacenar los datos?')" type="submit" value="Registrar" name="Insertar" id="Insertar" /> </td>
      </table>
    </div>
  </form>
  <br><br><br>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>"ID Activo</th>
        <th>Nombre Activo</th>
        <th>Descripción Activo</th>
        <th>Tipo Activo</th>
       
      </tr>
    </thead>
    <tbody>
      <?php
      $activoBusiness = new activoBusiness();
      $activos = $activoBusiness->obtener();
      foreach ($activos as $row) {
        echo '<form  method="post" enctype="multipart/form-data" action="../business/activoAction.php">';
        echo '<input type="hidden" name="act_id" value="' . $row->getAct_id() . '">';
        echo '<tr>';

        echo '<td><input readonly type="number" name="act_id" id="act_id" value="' . $row->getAct_id() . '"/></td>';
        echo '<td><input  type="text" id="act_nombre" name="act_nombre"  value="' . $row->getAct_nombre() . '"/></td>';
        echo '<td><input  type="text" id="act_descripcion" name="act_descripcion"  value="' . $row->getAct_descripcion() . '"/></td>';
        echo '<td><input  type="text" id="tipo_activo_id" name="tipo_activo_id"  value="' . $row->getTipo_activo_id() . '"/></td>';
        
       
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
  echo '</br></br><button name="Volver" id="volver"><a href="../">Volver</a></button><br>';
  ?>




</body>

</html>