<?php
include '../business/activoTipoBusiness.php';
?>

<!DOCTYPE html>
<head>
  <title>Tipo de Avtivo</title>
</head>
<body>


  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Tipo de Activo</th>
        <th>Descripcion</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $activoTipoBusiness = new ActivoTipoBusiness();
      $tipoActivo = $activoTipoBusiness->obtener();
      foreach ($tipoActivo as $row) {

        echo '<form  method="post" enctype="multipart/form-data" action="../business/tipoActivoAction.php">';
        echo '<input type="hidden" name="tipoActivoId" value="' . $row->getTiptip_id() . '">';
        echo '<tr>';

        echo '<td><input readonly type="text" name="tipoActivoNombre" id="tipoActivoNombre" value="' . $row->getTip_nombre() . '"/></td>';
        echo '<td><input readonly type="text" id="tipoActivoDescripcion" name="tipoActivoDescripcion"  value="' . $row->getTip_descripcion() . '"/></td>';
      

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