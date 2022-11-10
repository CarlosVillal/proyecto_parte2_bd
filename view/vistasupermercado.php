
<?php
include '../business/supermercadoBusiness.php';

?>

<!DOCTYPE html>

<head>

  <title>Supermercados</title>
</head>

<body>

  <form method="POST" id="SupermercadoForm" action="../business/supermercadoAction.php">
    <div class="table-responsive">
      <table class="table table-bordered">



        <td><input type="number" id="sup_id" name="sup_id" placeholder="ID Supermercado" required></td>
        <td><input type="text" id="sup_nombre" name="sup_nombre" placeholder="Nombre Supermercado" required></td>
        <td><input type="number" id="sup_telefono" name="sup_telefono" placeholder="Telefono Supermercado" required></td>
      


        <td><input onclick="return confirm('Seguro que desea almacenar los datos?')" type="submit" value="Registrar" name="Insertar" id="Insertar" /> </td>
      </table>
    </div>
  </form>
  <br><br><br>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID Supermercado</th>
        <th>Nombre Supermercado</th>
        <th>Telefono Supermercado</th>
       
      </tr>
    </thead>
    <tbody>
      <?php
      $supermercadoBusiness = new supermercadoBusiness();
      $supermercados = $supermercadoBusiness->obtener();
      foreach ($supermercados as $row) {
        echo '<form  method="post" enctype="multipart/form-data" action="../business/supermercadoAction.php">';
        echo '<input type="hidden" name="sup_id" value="' . $row->getSup_id() . '">';
        echo '<tr>';

        echo '<td><input readonly type="number" name="sup_id" id="sup_id" value="' . $row->getSup_id() . '"/></td>';
        echo '<td><input  type="text" id="sup_nombre" name="sup_nombre"  value="' . $row->getSup_nombre() . '"/></td>';
        echo '<td><input  type="text" id="sup_telefono" name="sup_telefono"  value="' . $row->getSup_telefono() . '"/></td>';
      
       
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