<?php
include("conexion.php");
$sql="SELECT * from almacen WHERE abierto='abierto'";
$consulta=mysqli_query($conex,$sql);


echo "MOSTRAR TODOS LOS PUESTOS CERRADOS";
echo "<table border=1>";
while($registro=mysqli_fetch_row($consulta)){

	echo "<tr>";
	echo "<td>".$registro[0]."</td>";
	
	echo "</tr>";
if ($registro[1]=="cerrado"){
include("formu.php");

}else{
	echo "esta todo abierto. no necesita formulario";
}

}



echo "</table>";


?>