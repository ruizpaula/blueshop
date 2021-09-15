<?php
    include("conexion_bd.php");
    $id = $_GET["id"];

    $eliminar = "DELETE FROM factura_entrada WHERE no_factura='$id'";
    $consulta = mysqli_query($conn, $eliminar);
    if($consulta){
        //echo "<script>alert('se ha eliminado el usuario con exito')</script>";
        header("location: entrada.php");
        ?>
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                ¡Registrado eliminado correctamente!
                </div>
            </div>
		?php

    }else{
        ?>
        <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Registro NO eliminado .
                </div>
        </div>
        <?php
    }

?>