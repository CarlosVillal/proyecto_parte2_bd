
<?php
include '../business/proveedorBusiness.php';

?>

<!DOCTYPE html>

<head>

  <title>Provedores</title>
</head>


<body>

  <form method="POST" id="ProvedorForm" action="../business/proveedorAction.php">
    <div class="table-responsive">
      <table class="table table-bordered">



        <td><input type="number" id="prov_id" name="prov_id" placeholder="ID Provedor" required></td>
        <td><input type="text" id="prov_nombre" name="prov_nombre" placeholder="Nombre Provedor" required></td>
        <td><input type="text" id="prov_correo" name="prov_correo" placeholder="Correo Provedor" required></td>
        <td><input type="text" id="prov_telefono" name="prov_telefono" placeholder="Telefono Provedor" required></td>
        


        <td><input onclick="return confirm('Seguro que desea almacenar los datos?')" type="submit" value="Registrar" name="Insertar" id="Insertar" /> </td>
      </table>
    </div>
  </form>
  <br><br><br>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID Provedor</th>
        <th>Nombre Provedor</th>
        <th>Correo Provedor</th>
        <th>Telefono Provedor</th>
      
      </tr>
    </thead>
    <tbody>
      <?php
      $proveedorBusiness = new proveedorBusiness();
      $proveedores = $proveedorBusiness->obtener();
      foreach ($proveedores as $row) {
        echo '<form  method="post" enctype="multipart/form-data" action="../business/proveedorAction.php">';
        echo '<input type="hidden" name="prov_id" value="' . $row->getProv_id() . '">';
        echo '<tr>';

        echo '<td><input readonly type="number" name="prov_id" id="prov_id" value="' . $row->getCli_cedula() . '"/></td>';
        echo '<td><input  type="text" id="prov_nombre" name="prov_nombre"  value="' . $row->getProv_nombre() . '"/></td>';
        echo '<td><input  type="text" id="prov_correo" name="prov_correo"  value="' . $row->getProv_correo() . '"/></td>';
        echo '<td><input  type="text" id="prov_telefono" name="prov_telefono"  value="' . $row->getProv_telefono() . '"/></td>';
       
       
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