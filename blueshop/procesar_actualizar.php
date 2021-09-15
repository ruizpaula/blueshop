<?php
include("conexion_bd.php");
$no_factura = $_POST["no_factura"];
$fecha = $_POST["fecha"];
$producto = $_POST["producto"];
$proveedor = $_POST["proveedor"];
$monto = $_POST["monto"];

//CONSULTA ==  UPDATE nombre de la tabla de la bd SET nombre de la columna en la base de datos='nombre de la variable'

$actualizar = "UPDATE factura_entrada SET no_factura='$no_factura', fecha='$fecha', producto='$producto', p_rut='$proveedor', total='$monto' WHERE no_factura='$no_factura'";

echo $actualizar;

$resultado = mysqli_query($conn, $actualizar);
if($resultado){
    //echo $resultado;
    header("location: entrada.php");

}else{
    ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                !ups¡ ha ocurrido un error vueleve a intentarlo
            </div>
        </div>
	<?php
}

?>