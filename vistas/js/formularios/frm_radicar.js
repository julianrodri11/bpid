// JavaScript Document
// Desarrollado Ing Dario Santacruz

$(document).ready(function() {
   // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
   $('.modal').modal();
});
/*
FUNCION QUE DESPUES DE HACER CLICK EN EL BOTON ENVIAR SE ABRE EL DIALOG
 */
function validar() {
   $('#modal1').modal('open');
}
//FUNCION PARA CARGAR LOS DATOS BASICOS DEL ARCHIVO XML DE FORMA TEMPORAL
function archivo_xml()
{
	//CONTROLES FORMULARIO
	var nombre_proyecto= document.getElementById('frm_nom_proyecto');
	var sector= document.getElementById('frm_sector');
	var localizacion= document.getElementById('frm_localizacion');
	var valor= document.getElementById('frm_valor');
	var eje= document.getElementById('frm_eje');
	var programa= document.getElementById('frm_programa');
	var subprograma= document.getElementById('frm_subprograma');
	var formData=new FormData($("#frm_radicar")[0]);  
 	var nombre_archivo=document.getElementById('frm_archivo').value;
 	var  extension = (nombre_archivo.substring(nombre_archivo.lastIndexOf("."))).toLowerCase();
 
    if (extension=='.xml') { 
				   	 	$.ajax({
						 url:'../../modelo/consultas/consultar_basico_xml.php',
						type: "POST",
						data: formData,
						contentType:false,
						processData:false,
						success: function(datos)
						{
						
						var cadena=datos.split("/");
						nombre_proyecto.focus();
						nombre_proyecto.value=cadena[0];
						sector.focus();
						sector.value=cadena[1];
						localizacion.focus();
						localizacion.value=cadena[2];
						eje.focus();
						eje.value=cadena[3];
						programa.focus();
						programa.value=cadena[4];
						subprograma.focus();
						subprograma.value=cadena[5];
						valor.focus();
						valor.value=cadena[7];
						}
						});	
						}
	else
	{
		alert("EL ARCHIVO DEBE TENER EXTENCION XML");
		return false;
	}						
								
}

function Borrar() {
	document.getElementById("frm_radicar").reset();

	}