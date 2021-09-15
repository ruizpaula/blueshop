<?php 

if (isset($_POST['no_factura'])) {
	include ("conexion_bd.php");
	$id=$_POST['no_factura'];
	$sql=mysqli_query($conectar,"SELECT * FROM factura_entrada WHERE id=".$id);

$resultado=mysqli_fetch_assoc($sql);

echo json_encode($resultado);

}


 ?>
 ?>