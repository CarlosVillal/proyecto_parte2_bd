    <?php
include '../business/empleadoBusiness.php';
?>

<!DOCTYPE html>
<head>
  <title>Empleados</title>
</head>

<body>

  <form method="POST" id="EmpleadoForm" action="../business/empleadoAction.php">
    <div class="table-responsive">
      <table class="table table-bordered">

        <td><input type="number" id="emp_cedula" name="emp_cedula" placeholder="Cedula Empleado" required></td>
        <td><input type="text" id="emp_nombre" name="emp_nombre" placeholder="Nombre Empleado" required></td>
        <td><input type="text" id="emp_apellido" name="emp_apellido" placeholder="Apellido Empleado" required></td>
        <td><input type="text" id="emp_correo" name="emp_correo" placeholder="Correo Empleado" required></td>
        <td><input type="number" id="emp_telefono" name="emp_telefono" placeholder="Telefono Empleado" required></td>

        <td><input onclick="return confirm('Seguro que desea almacenar los datos?')" type="submit" value="Registrar" name="Insertar" id="Insertar" /> </td>
      </table>
    </div>
  </form>
  <br><br><br>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Cedula Empleado</th>
        <th>NNombre Empleado</th>
        <th>Apellido Empleado</th>
        <th>Correo Empleado</th>
        <th>Telefono Empleado</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $empleadoBusiness = new empleadoBusiness();
      $empleados = $empleadoBusiness->obtener();
      foreach ($empleados as $row) {
        echo '<form  method="post" enctype="multipart/form-data" action="../business/empleadoAction.php">';
        echo '<input type="hidden" name="emp_cedula" value="' . $row->getEmp_cedula() . '">';
        echo '<tr>';

        echo '<td><input readonly type="number" name="emp_cedula" id="emp_cedula" value="' . $row->getEmp_cedula() . '"/></td>';
        echo '<td><input  type="text" id="emp_nombre" name="emp_nombre"  value="' . $row->getEmp_nombre() . '"/></td>';
        echo '<td><input  type="text" id="emp_apellido" name="emp_apellido"  value="' . $row->getEmp_apellido() . '"/></td>';
        echo '<td><input  type="text" id="emp_correo" name="emp_correo"  value="' . $row->getEmp_correo() . '"/></td>';
        echo '<td><input  type="text" id="emp_telefono" name="emp_telefono"  value="' . $row->getEmp_telefono() . '"/></td>';
       
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