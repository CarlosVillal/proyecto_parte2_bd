<?php
include '../business/productoBusiness.php';
include '../business/proveedorBusiness.php';
?>

<!DOCTYPE html>

<head>

  <title>Productos</title>
</head>

<body>

  <form method="POST" id="ProductoForm" action="../business/productoAction.php">
    <div class="table-responsive">
      <table class="table table-bordered">



        <td><input type="number" id="productoId" name="productoId" placeholder="ID Producto" required></td>
        <td><input type="text" id="productoNombre" name="productoNombre" placeholder="Nombre Producto" required></td>
        <td><input type="text" id="productoDescripcion" name="productoDescripcion" placeholder="Descripcion Producto" required></td>
        <td><input type="number" id="productoPrecio" name="productoPrecio" placeholder="Producto Precio" required></td>
        <td><p>Provedor:<select id="provedorId" name="provedorId" required >
                                
                                <?php
                             $proveedorBusiness = new proveedorBusiness();
                             $proveedores = $proveedorBusiness->obtener();
                             foreach ($proveedores as $row) {                                
                               echo '<option value="'. $row->getProv_nombre(). '">'. $row->getProv_id(). ' - '. $row->getProv_nombre(). '</option>';                                
                             }
                             ?>
                             </select></td>
        <td><input type="number" id="productoNumeroStock" name="productoNumeroStock" placeholder="Numero Stock" required></td>

        <td><input onclick="return confirm('Seguro que desea almacenar los datos?')" type="submit" value="Registrar" name="Insertar" id="Insertar" /> </td>
      </table>
    </div>
  </form>
  <br><br><br>

  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>ID Tipo Producto</th>
        <th>Nombre del Producto</th>
        <th>Descripcion Producto</th>
        <th>Precio del Producto</th>
        <th>ID Tipo Provedor</th>
        <th>NumeroStock del Producto</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $productoBusiness = new productoBusiness();
      $productos = $productoBusiness->obtener();
      foreach ($productos as $row) {
        echo '<form  method="post" enctype="multipart/form-data" action="../business/productoAction.php">';
        echo '<input type="hidden" name="productoId" value="' . $row->getProductoId() . '">';
        echo '<tr>';

        echo '<td><input readonly type="number" name="productoId" id="productoId" value="' . $row->getProductoId() . '"/></td>';
        echo '<td><input  type="text" id="productoNombre" name="productoNombre"  value="' . $row->getProductoNombre() . '"/></td>';
        echo '<td><input  type="text" id="productoDescripcion" name="productoDescripcion"  value="' . $row->getProductoDescripcion() . '"/></td>';
        echo '<td><input  type="text" id="productoPrecio" name="productoPrecio"  value="' . $row->getProductoPrecio() . '"/></td>';
        echo '<td><input  type="text" id="provedorId" name="provedorId"  value="' . $row->getProvedorId() . '"/></td>';
        echo '<td><input  type="text" id="productoNumeroStock" name="productoNumeroStock"  value="' . $row->getProductoNumeroStock() . '"/></td>';
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