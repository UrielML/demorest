<?php
include("conexion.php");
if(isset($_POST["producto"])){
	$con=mysql_connect($db_host, $db_user, $db_password) or die ("problemas al conectar");
	mysql_select_db($db, $con) or die("Error al seleccionar la base de datos");
	mysql_query("INSERT INTO producto (producto,descripcion,existencias,precio_compra,precio_venta) VALUES ('$_POST[producto]','$_POST[descripcion]','$_POST[existencias]','$_POST[precio_compra]','$_POST[precio_venta]')",$con); 
	echo"datos insertados";
	header ("Location: index.php");
}else{
	echo "Problemas al insertar datos";
}
?>