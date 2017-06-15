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
function cargar_grillas_formulario(campos){
	///var elem = campos.split('-');
	cargar_grilla_proyectos(campos)
	
}
