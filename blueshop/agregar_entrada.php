<?php 

include("conexion_bd.php");

if (isset($_POST['agregar'])) {

  if (strlen($_POST['no_factura']) >= 1 &&  strlen($_POST['fecha']) >= 1 && strlen($_POST['producto']) >= 1 && strlen($_POST['cantidad']) >= 1 &&  strlen($_POST['proveedor']) >= 1 &&  strlen($_POST['monto']) >= 1  )

 {
		$no_factura = trim($_POST['no_factura']);
		$fecha = trim($_POST['fecha']);
		$producto = trim($_POST['producto']);
        $cantidad = trim($_POST['cantidad']);
		$proveedor = trim($_POST['proveedor']);
    	$monto = trim($_POST['monto']);


		$consulta = "INSERT INTO factura_entrada(no_factura, fecha, producto,cantidad, p_rut, total) VALUES ('$no_factura', '$fecha', '$producto', '$cantidad','$proveedor', '$monto')";

		//echo $consulta;
		$resultado =  mysqli_query($conn,$consulta);
		//echo $resultado;
		if ($resultado) {
			?>
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                ¡Registrado correctamente!
                </div>
            </div>
			<?php
		} else {
			?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                !ups¡ ha ocurrido un error vueleve a intentarlo
                </div>
            </div>
			<?php
		} 
	} 
}	
?>