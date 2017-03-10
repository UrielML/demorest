<?php
    $id_productolml = $_GET['id'];
    if (isset($_GET['id'])) {
      include("conexion.php");
      $con=mysql_connect($db_host, $db_user, $db_password) or die ("problemas al conectar");
      mysql_select_db($db, $con) or die("Error al seleccionar la base de datos");
      $consulta=mysql_query("SELECT * FROM producto WHERE id_producto = $id_productolml;",$con) or die (mysql_error()); 
      $row = mysql_fetch_array($consulta);
    }
  ?>
  <html>
   <head>
    <meta charset="utf-8">
    <title>ProductosPanel</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimum-scale=1.0">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   </head>
  <body>
  <div class="bg-primary" align="center">
 <h1 >PRODUCTOS</h1>
 </div>
 <div>
   <h2 class="bg-success"><a href=index.php><span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;INICIO&nbsp;</span></a>Editar Registros</h2>
 </div>
  <form action="edit.php?id=<?php echo $id_productolml;?>" method="post" name="form1">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table align="center" class="table table-condensed">
      <tbody>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap">producto:</td>
          <?php 
            echo '<td><input name="producto" value="'.$row["producto"].'" size="32" type="text" /></td>'
          ?>
        </tr>
        <tr valign="b aseline">
          <td align="right" nowrap="nowrap">descripcion:</td>
          <?php 
            echo '<td><input name="descripcion" value="'.$row["descripcion"].'" size="32" type="text" /></td>'
          ?>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap">existencias:</td>
          <?php 
            echo '<td><input name="existencias" value="'.$row["existencias"].'" size="32" type="text" /></td>'
          ?>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap">precio_compra:</td>
          <?php 
            echo '<td><input name="precio_compra" value="'.$row["precio_compra"].'" size="32" type="text" /></td>'
          ?>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap">precio_venta:</td>
          <?php 
            echo '<td><input name="precio_venta" value="'.$row["precio_venta"].'" size="32" type="text" /></td>'
          ?>
        </tr>
        <tr valign="baseline">
          <td align="right" nowrap="nowrap">&nbsp;</td>
          <td><input value="Modificar Registro" type="submit" class="btn btn-primary btn-lg"/></td>
        </tr>
      </tbody>
    </table></form>
  </body>
</html>