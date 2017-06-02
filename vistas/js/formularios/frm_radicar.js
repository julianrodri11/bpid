// JavaScript Document
// Desarrollado Ing Dario Santacruz
          
$(document).ready(function() {
   // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
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
});
/*
FUNCION QUE DESPUES DE HACER CLICK EN EL BOTON ENVIAR SE ABRE EL DIALOG
 */
function validar() {
var nombre_archivo=document.getElementById('frm_archivo').value;
				if(nombre_archivo=="")
				{
					document.getElementById('d_error').innerHTML='<p>POR FAVOR SELECCIONE EL ARCHIVO XML<p>';
					$("#d_error").dialog("open");
					//alert("DEBE SELECCIONAR UN ARCHIVO XML ANTES");
					return false;
					nombre_archivo.focus();
				}

				else
				{
				   $('#modal1').modal('open');
				}
}

//FUNCION PARA CARGAR LOS DATOS BASICOS DEL ARCHIVO XML DE FORMA TEMPORAL
function archivo_xml()
{
	//CONTROLES FORMULARIO
	var nombre_proyecto= document.getElementById('frm_nom_proyecto');
	var numero_proyecto= document.getElementById('frm_num_proyecto');
	var sector= document.getElementById('frm_sector');
	var localizacion= document.getElementById('frm_localizacion');
	var valor= document.getElementById('frm_valor');
	var eje= document.getElementById('frm_eje');
	var programa= document.getElementById('frm_programa');
	var subprograma= document.getElementById('frm_subprograma');
	var formData=new FormData($("#frm_radicar")[0]);  
 	var nombre_archivo=document.getElementById('frm_archivo').value;
 	var extension = (nombre_archivo.substring(nombre_archivo.lastIndexOf("."))).toLowerCase();
 
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
						numero_proyecto.focus();
						numero_proyecto.value=cadena[8];
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

//FUNCION PARA VALIDAR CAMPOS DE FORMULARIO
function almacenar()
{
	//DATOS DEL PROYECTO DEL ARCHIVO XML
	var numero_proyecto= document.getElementById('frm_num_proyecto').value;
	var nombre_proyecto= document.getElementById('frm_nom_proyecto').value;
	var sector= document.getElementById('frm_sector').value;
	var localizacion= document.getElementById('frm_localizacion').value;
	var valor= document.getElementById('frm_valor').value;
	var eje= document.getElementById('frm_eje').value;
	var programa= document.getElementById('frm_programa').value;
	var subprograma= document.getElementById('frm_subprograma').value;
 	var poai=document.getElementById('frm_poai').value;
 	var entidad_proponente=document.getElementById('frm_entidad').value;
 	var entidad_ejecutante=document.getElementById('frm_entidad_ejecuta').value;
 	var nom_responsable=document.getElementById('frm_nom_responsable').value;
 	var num_id_responsable=document.getElementById('frm_id_responsable').value;
 	var cargo_responsable=document.getElementById('frm_cargo_responsable').value;
 	var direccion_responsable=document.getElementById('frm_dir_responsable').value;
 	var telefono_responsable=document.getElementById('frm_tel_responsable').value;
 	if(telefono_responsable==""){telefono_responsable=-1}
 	var cel_responsable=document.getElementById('frm_cel_responsable').value;
 	var correo_responsable=document.getElementById('frm_correo').value;
 	var id_usuario=document.getElementById('frm_id_usuario').value;
 	var nombre_usuario=document.getElementById('frm_nom_usuario').value;
 	var observaciones=document.getElementById('frm_observaciones').value;
 	if(observaciones==""){observaciones=-1}
 	var formData=new FormData($("#frm_radicar")[0]);  
 	var nombre_archivo=document.getElementById('frm_archivo').value;
 	
 	var value=numero_proyecto+'//'+nombre_proyecto +'//'+sector+'//'+localizacion+'//'+valor+'//'+eje+'//'+programa+'//'+subprograma+'//'+poai+'//'+
 	entidad_proponente+'//'+entidad_ejecutante+'//'+num_id_responsable+'//'+nom_responsable+'//'+cargo_responsable+'//'+
 	direccion_responsable+'//'+telefono_responsable+'//'+cel_responsable+'//'+correo_responsable+'//'+id_usuario+'//'+nombre_usuario+'//'+
 	observaciones;

 	jQuery.ajax({	
		    type: "POST",
              url:'../../controlador/c_radicar.php',
			async: false,
			data:{value:value},
            success:function(respuesta){
				alert(respuesta)
				/*
			if(respuesta==1){ 
			
			var formData=new FormData($("#frm_radicar")[0]);  //lo hago por la validacion
										$.ajax({
						url:'../clases/crear/crear_nueva_subir_documentos_contratos_subasta.php',
										type: "POST",
										data: formData,
										contentType:false,
										processData:false,
										success: function(datos)
										{
										alert(datos);
							 window.self.location="../formularios/frm_consulta_subasta_crear.php";
										}
										});			
			//
			
			}
			if(respuesta==0){alert("ERROR, INTENTELO NUEVAMENTE");return;}
			if(respuesta==110){alert("ERROR, HAY CAMPOS VACIOS Q DEBEN REGISTRARSE");return;}
			if(respuesta==2){alert("ERROR, NUMERO DE CONTRATO EXISTSENTE");return;}
			if(respuesta==3){alert("ERROR,ACTUALICE E INTENTELO NUEVAMENTE");return;}
			if(respuesta==9){alert("ERROR,NO SE INGRESO LOS DATOS DE INVITACION");return;}
*/
										},
										
            error: function () {
				  alert("Error inesperado")
				  window.top.location ="../index.html";	
			}
        });
}	