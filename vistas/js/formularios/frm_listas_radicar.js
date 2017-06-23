// JavaScript Document
// Desarrollado Ing Dario Santacruz
        
$(document).ready(function() {
    $('.modal').modal();
    $('select').material_select();

    $("#d_error").dialog({
						autoOpen: false,
						modal: true,
						buttons: {
						"Cerrar": function () {
						$(this).dialog("close");
											  }
								}
						});
     $("#d_ingreso").dialog({
						autoOpen: false,
						modal: true,
						buttons: {
						"Aceptar": function () {
						$(this).dialog("close");
						window.self.location="../formularios/frm_radicar.php";
											  }
								}
						});
});
//FUNCION PARA CARGAR LA GRILLA DE LOS PROYECTOS
function buscarViabilidades(criterio){
    
    var datos=document.getElementById("input_buscar").value;
    var value =datos+'//'+criterio;
 	    
    document.getElementById("resultado").innerHTML='<img src="../css/ajax-loader.gif" width="35" height="35">' 
    jQuery.ajax({	
        type: 'POST',
        url:'../../modelo/consultas/cargar_radicar_listas.php',
        async: true,
        data:{value:value},
        success:function(respuesta){
        	document.getElementById("resultado").innerHTML='';
             document.getElementById('resultado').innerHTML='<p>'+ respuesta + '</p>';
        },

        error: function () {
            alert("Error inesperado")
            window.top.location ="../index.html";	
        }
        
    });
    
}

function mas(cod){
    
    document.getElementById("mas").style.display = "block";
    
    document.getElementById("numero").innerHTML = cod;
    
}

function cerrarFrmExterno(id){
    
    document.getElementById(id).style.display = "none";
    
}
