<?php
include("conexion.php");
$puesto=$_POST['puesto'];
$sql="update almacen SET abierto='cerrado' where puesto='$puesto'";
if(mysqli_query($conex,$sql)){
	echo "actualizado";
}else{
	echo "error";
}