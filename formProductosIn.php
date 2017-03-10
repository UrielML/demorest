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
 <h1>PRODUCTOS</h1>
 </div>
 <div>
   <h2 class="bg-success" ><a href=index.php><span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;INICIO&nbsp;</span></a>Agregar Registros</h2>
 </div>
<form action="insert.php" method="post" name="form1" class="form-group">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table align="center" class="table table-condensed">
    <tbody>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">producto:</td>
        <td><input name="producto" value="" size="32" type="text" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">descripcion:</td>
        <td><input name="descripcion" value="" size="32" type="text" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">existencias:</td>
        <td><input name="existencias" value="" size="32" type="text" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">precio_compra:</td>
        <td><input name="precio_compra" value="" size="32" type="text" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">precio_venta:</td>
        <td><input name="precio_venta" value="" size="32" type="text" /></td>
      </tr>
      <tr valign="baseline">
        <td align="right" nowrap="nowrap">&nbsp;</td>
        <td><input value="Insertar registro" type="submit" class="btn btn-primary btn-lg"/></td>
      </tr>
    </tbody>
  </table></form>
</body>
</html>