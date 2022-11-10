<?php
include '../business/venta_productoBusiness.php';
?>

<!DOCTYPE html>

<head>
  <title>Ventas y Productos</title>
</head>
<body>


  <table class="table table-striped table-bordered">
    <thead>
      <tr>
      <th>ID de venta_Producto</th>
        <th>ID de Producto</th>
        <th>ID Venta</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $venta_productoBusiness = new venta_productoBusiness();
      $venta_productos = $venta_productoBusiness->obtener();
      foreach ($venta_productos as $row) {

        echo '<form  method="post" enctype="multipart/form-data" action="../business/venta_productoAction.php">';
        echo '<input type="hidden" name="ven_prod_id" value="' . $row->getVen_prod_id() . '">';
        echo '<tr>';

        echo '<td><input readonly type="text" name="ven_prod_id" id="ven_prod_id" value="' . $row->getVen_prod_id() . '"/></td>';
        echo '<td><input readonly type="text" id="productoId" name="productoId"  value="' . $row->getProductoId() . '"/></td>';
        echo '<td><input readonly type="text" id="ventaId" name="ventaId"  value="' . $row->getVentaId() . '"/></td>';

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