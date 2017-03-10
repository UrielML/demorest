<?php
$id_productolml = $_GET['id'];
echo $id_productolml;
	include("conexion.php");
	
	$con=mysql_connect($db_host, $db_user, $db_password) or die ("problemas al conectar");
	mysql_select_db($db, $con) or die("Error al seleccionar la base de datos");
	
	$reg=mysql_query("SELECT producto FROM producto WHERE id_producto=$id_productolml",$con);

	if($reg1=mysql_fetch_array($reg)){
		mysql_query("DELETE FROM producto WHERE id_producto='$id_productolml'",$con);
		echo"datos insertados";
		header ("Location: index.php");
	}else{
		echo mysql_error();
		echo "Problemas al insertar datos";
	}
?>

