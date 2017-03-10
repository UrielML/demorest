<?php
	include("conexion.php");
	$con=mysql_connect($db_host, $db_user, $db_password) or die ("problemas al conectar");
	mysql_select_db($db, $con) or die("Error al seleccionar la base de datos");
	$consulta=mysql_query("SELECT * FROM producto",$con) or die (mysql_error()); 
		
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
 <h1>PRODUCTOS</h1>
 </div>
 <h2><a href=index.php><span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;INICIO&nbsp;</span></a></h2>
 <p>&nbsp;</p>
  <p>&nbsp;</p>
 	<table border="0" class="table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>PRODUCTO</th>
				<th>DESCRIPCION</th>
				<th>EXISTENCIAS</th>
				<th>PRECIO DE COMPRA</th>
				<th>PRECIO DE VENTA</th>
				<th colspan="2" align="center"><a href="formProductosIn.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></th>
			</tr>
		</thead>
		<tbody>
		<?php
			while ($fila = mysql_fetch_array($consulta)){
				echo '<tr>';
				echo '<td>'.$fila["id_producto"].'</td>';
				echo '<td>'.$fila["producto"].'</td>';
				echo '<td>'.$fila["descripcion"].'</td>';
				echo '<td>'.$fila["existencias"].'</td>';
				echo '<td>'.$fila["precio_compra"].'</td>';
				echo '<td>'.$fila["precio_venta"].'</td>';
				echo '<td><a href="formProductosEdit.php?id='.$fila["id_producto"].'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>';
				echo '<td><a href="deleteRow.php?id='.$fila["id_producto"].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>';
				echo '</tr>';
				}
		?>
		</tbody>
	</table>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </body>
 </html>
