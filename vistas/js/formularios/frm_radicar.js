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
	 var formData=new FormData($("#frm_radicar")[0]);  
 
    
				   	 	$.ajax({
						 url:'../../modelo/consultas/consultar_basico_xml.php',
						type: "POST",
						data: formData,
						contentType:false,
						processData:false,
						success: function(datos)
						{
						alert(datos);
						window.self.location ="../formularios/frm_radicar.php";
						}
						});		
								
}