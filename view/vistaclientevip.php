
<?php
include '../business/cilenteVIPBusiness.php';

?>

<!DOCTYPE html>

<head>

  <title>Clientes VIP</title>
</head>

<body>

  <form method="POST" id="ClienteVIPForm" action="../business/clienteVIPAction.php">
    <div class="table-responsive">
      <table class="table table-bordered">



        <td><input type="number" id="cli_cedula" name="cli_cedula" placeholder="Cedula Cliente" required></td>
        <td><input type="text" id="cli_nombre" name="cli_nombre" placeholder="Nombre Cliente" required></td>
        <td><input type="text" id="cli_apellido" name="cli_apellido" placeholder="Apellido Cliente" required></td>
        <td><input type="text" id="cli_correo" name="cli_correo" placeholder="Correo Cliente" required></td>
        <td><input type="number" id="cli_telefono" name="cli_telefono" placeholder="Telefono Cliente" required></td>


        <td><input onclick="return confirm('Seguro que desea almacenar los datos?')" type="submit" value="Registrar" name="Insertar" id="Insertar" /> </td>
      </table>
    </div>
  </form>
  <br><br><br>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Cedula Cliente</th>
        <th>Nombre Cliente</th>
        <th>Apellido Cliente</th>
        <th>Correo Cliente</th>
        <th>Telefono Cliente</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $cilenteVIPBusiness = new cilenteVIPBusiness();
      $clientesVIP = $cilenteVIPBusiness->obtener();
      foreach ($clientesVIP as $row) {
        echo '<form  method="post" enctype="multipart/form-data" action="../business/clienteVIPAction.php">';
        echo '<input type="hidden" name="cli_cedula" value="' . $row->getCli_cedula() . '">';
        echo '<tr>';

        echo '<td><input readonly type="number" name="cli_cedula" id="cli_cedula" value="' . $row->getCli_cedula() . '"/></td>';
        echo '<td><input  type="text" id="cli_nombre" name="cli_nombre"  value="' . $row->getCli_nombre() . '"/></td>';
        echo '<td><input  type="text" id="cli_apellido" name="cli_apellido"  value="' . $row->getCli_apellido() . '"/></td>';
        echo '<td><input  type="text" id="cli_correo" name="cli_correo"  value="' . $row->getCli_correo() . '"/></td>';
        echo '<td><input  type="number" id="cli_telefono" name="cli_telefono"  value="' . $row->getCli_telefono() . '"/></td>';
       
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