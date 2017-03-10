<?php
$id_productolml = $_GET['id'];
include("conexion.php");
if(isset($_POST["producto"])){
	$con=mysql_connect($db_host, $db_user, $db_password) or die ("problemas al conectar");
	mysql_select_db($db, $con) or die("Error al seleccionar la base de datos");
	mysql_query("UPDATE producto set producto='$_POST[producto]',descripcion='$_POST[descripcion]',existencias='$_POST[existencias]',precio_compra='$_POST[precio_compra]',precio_venta='$_POST[precio_venta]' WHERE id_producto=$id_productolml",$con) or die (mysql_error()); 
	echo"Actualizacion Correcta";
	header ("Location: index.php");
}else{
	echo "Problemas al insertar datos";
}
?>