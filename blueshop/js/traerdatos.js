function ponerdatos(id) {
	
        $.ajax({
        url: "php/traerdatos.php",
        method: "POST",
        data:{
            id: id,
            
            
        },

    cache: "false",
    success: function(resp){
    if (resp){

        resp = JSON.parse(resp);
        $("#no_factura").val(resp["no_factura"]);
        $("#fecha").val(resp["fecha"]);
        $("#nombre_pro").val(resp["nombre_pro"]);
        $("#cantidad").val(resp["cantidad"]);
        $("#nombre").val(resp["nombre"]);
        $("#total").val(resp["total"]);
        

    }else {
    alert("consulta fallida" + resp);

    }

    }

        });
}