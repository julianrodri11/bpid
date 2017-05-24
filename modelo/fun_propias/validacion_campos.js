// JavaScript 
// Funciones basicas validacion campos formulario
numero_contador=0 
function solonum(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "0123456789";
	especiales = [8,39,46,9];
	tecla_especial = false
	for(var i in especiales){
	    if(key == especiales[i]){
		tecla_especial = true;
		break;
            } 
	}
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
	    return false;
	}
}

//funcion solo letras
function sololet(e){
	
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "abcdefghijklmnñopqrstuvwxyz";
	especiales = [8,39,46,9];
	tecla_especial = false
	for(var i in especiales){
	    if(key == especiales[i]){
		tecla_especial = true;
		break;


            } 
	}
	if(letras.indexOf(tecla)==-1 && !tecla_especial){
	    return false;
	}
}

//funcion solo numeros letras sin enter
function solonum_let(e){
	
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " 0123456789áéíóúabcdefghijklmnñopqrstuvwxyz#'-";
	especiales = [8,39,46,9];
	tecla_especial = false
	for(var i in especiales){
	    if(key == especiales[i]){
		tecla_especial = true;
		break;


            } 
	}
	
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
	    return false;
	}
}
//-----------------------------------------------------

//funcion solo numeros letras sin guiones
function solonum_let_sin_guiones(e){
	
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " 0123456789áéíóúabcdefghijklmnñopqrstuvwxyz'#";
	especiales = [8,39,46,9];
	tecla_especial = false
	for(var i in especiales){
	    if(key == especiales[i]){
		tecla_especial = true;
		break;


            } 
	}
	
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
	    return false;
	}
}
//funcion solo numeros letras sin / con espacios
function solonum_let_sin_barra_espacios(e){
	
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " 0123456789áéíóúabcdefghijklmnñopqrstuvwxyz#-:@''_";
	especiales = [8,39,46,9];
	tecla_especial = false
	for(var i in especiales){
	    if(key == especiales[i]){
		tecla_especial = true;
		break;


            } 
	}
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
	    return false;
	}
}
//funcion solo numeros letras sin / con espacios
function solonum_let_sin_barra_sin_espacios(e){
	
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "0123456789áéíóúabcdefghijklmnñopqrstuvwxyz#-:@'";
	especiales = [8,39,46,9];
	tecla_especial = false
	for(var i in especiales){
	    if(key == especiales[i]){
		tecla_especial = true;
		break;


            } 
	}
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
	    return false;
	}
}
//funcion caracteres para mail
function letras_mail(e){
	
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = "0123456789abcdefghijklmnñopqrstuvwxyz!#$%&'*+-_.~@";
	especiales = [8,39,46,9];
	tecla_especial = false
	for(var i in especiales){
	    if(key == especiales[i]){
		tecla_especial = true;
		break;


            } 
	}
	
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
	    return false;
	}
}
//--------------habilitar campo para añadir descripcion
//validaciones formulario contratacion directa
function habilitar() {
	valor=document.getElementById("frm_regimen");
	campo=document.getElementById("frm_regimen_desc");
	valor=valor.value;
	if (valor==0) campo.disabled=true;
	else if (valor==1) campo.disabled=false;
	else if (valor==2) campo.disabled=true;
}
//------
function mostrar_nit()
{
	valor=document.getElementById("frm_tipoidc");
	campo=document.getElementById("dverificacion1");
	valor=valor.value;
	if(valor >= 3 & valor<=5)
	{
	campo.style.display='';
	}
	else 
	{
	campo.style.display='none';
	}
}
//-----
function mostrar_nit1()
{
	valor=document.getElementById("frm_tipoidrep");
	campo=document.getElementById("dverificacion2");
	valor=valor.value;
	if(valor >= 3 & valor<=5)
	{
	campo.style.display='';
	}
	else 
	{
	campo.style.display='none';
	}
}
//mostrar contenido con boton de opcion
function mostrar_contenido() {
	campo=document.getElementById("frm_fila1");
	campo1=document.getElementById("frm_fila2");
	
	for(i=0;i<document.frm_contratacion_directa.frm_si_interve.length;i++){
	if(document.frm_contratacion_directa.frm_si_interve[i].checked){
	marcado=i;
	}
	}
	valor=document.frm_contratacion_directa.frm_si_interve[marcado].value;
	if (valor==0) {
	campo.style.display='';
	campo1.style.display='';
	}
	else if (valor==1){ 
	campo.style.display='none';
	campo1.style.display='none';
	}
}
//funcion para mstrar origen de recursos
function mostrar_destino() {
	campo=document.getElementById("fila_recursos");
	
	
	for(i=0;i<document.frm_contratacion_directa.frm_destino.length;i++){
	if(document.frm_contratacion_directa.frm_destino[i].checked){
	marcado=i;
	}
	}
	valor=document.frm_contratacion_directa.frm_destino[marcado].value;
	if (valor==0) {
	campo.style.display='';
	}
	else if (valor==1){ 
	//campo.style.display='none';
	campo.style.display='';
	}
	else if (valor==2){ 
	campo.style.display='none';
		}
}
//funcion para mostrar registro
function mostrar_registro_presupuestal() {
	campo=document.getElementById("fila_unidad");
	
	
	for(i=0;i<document.frm_contratacion_directa.frm_registro_presupuestal.length;i++){
	if(document.frm_contratacion_directa.frm_registro_presupuestal[i].checked){
	marcado=i;
	}
	}
	valor=document.frm_contratacion_directa.frm_registro_presupuestal[marcado].value;
	if (valor==0) {
	campo.style.display='';
	}
	else if (valor==1){ 
	campo.style.display='none';
	
	}
	
}
//Validacion Formulario Adion
function adicion()
{
	valor=document.getElementById("frm_tadicion");
	campo=document.getElementById("tiempo");
	campo1=document.getElementById("tiempo1");
	campo2=document.getElementById("tiempo2");
	campo3=document.getElementById("tiempo3");
	
	valor=valor.value;
	
	if (valor=="") {
	campo.style.display='none';
	campo1.style.display='none';
	campo2.style.display='none';
	campo3.style.display='none';
	}
	else if (valor==0){ 
	campo.style.display='';
	campo1.style.display='';
	campo2.style.display='none';
	campo3.style.display='none'
	}
	else if (valor==1){ 
	campo2.style.display='';
	campo3.style.display='';
	campo.style.display='none';
	campo1.style.display='none';
	}
	else if (valor==2){ 
	campo.style.display='';
	campo1.style.display='';
	campo2.style.display='';
	campo3.style.display='';
	}
	else if (valor==3){ 
	campo.style.display='none';
	campo1.style.display='none';
	campo2.style.display='none';
	campo3.style.display='none';
	}
}
//Validacion colocar puntos a la funcion 
//----------------------
function format(input)
{
	var num = input.value.replace(/\./g,'');
	if(!isNaN(num)){
	num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
	num = num.split('').reverse().join('').replace(/^[\.]/,'');
	input.value = num;
	}
	else{ alert('Solo se permiten numeros');
	input.value = input.value.replace(/[^\d\.]*/g,'');
	}
}
//---------------------
function formato_numero(input,campo)
{
	
	var num = input.value.replace(/\./g,'');
	if(!isNaN(num)){
	num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
	num = num.split('').reverse().join('').replace(/^[\.]/,'');
	//input.value = num;
	document.getElementById('d_'+campo).innerHTML=num;
	}
	else{ alert('Solo se permiten numeros');
	input.value = input.value.replace(/[^\d\.]*/g,'');
	}
}
//----------------------
function blanco(e){
	//funcion para ver si el campo es requerido o no 
	control=document.getElementById(e);
	valor=control.value;
	etiqueta='d_'+e;
	if (valor=="") {
		document.getElementById(etiqueta).innerHTML='';
		document.getElementById(etiqueta).innerHTML='Este Campo es requerido';
	}else{
		document.getElementById(etiqueta).innerHTML='';
	}
}
//--------------
function validar_campos_requeridos(campos,numero){
	//funcion para ver si el campo es requerido o no 
	var elem = campos.split('-');
	for(x=0;x<numero;x++){
		
		if(document.getElementById(elem[x]).value==''){
			document.getElementById('d_'+elem[x]).innerHTML='';
			document.getElementById('d_'+elem[x]).innerHTML='Este Campo es requerido'
			document.getElementById(elem[x]).focus()
			x=numero;
			return false;	
		}else{
			document.getElementById('d_'+elem[x]).innerHTML='';
		}
	}
	return true;	
}
//--------------------------
function eliminar_contenido(campo,opcion){
if(opcion==1){
	document.getElementById(campo).value='';
}
if(opcion==2){
	document.getElementById(campo).innerHTML='';
}
}
//--------------------------
function validarEmail(e) {
	object=document.getElementById(e);
	email=object.value;
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) ){
        alert("Error: La dirección de correo " + email + " es incorrecta.");
	object.focus();}	
}
//--------------------------
//validacion de claves
function verificar_clave() {
var clave=document.getElementById("frm_clave");
var clave2=document.getElementById("frm_clave2");
var caract_invalido = " ";
var caract_longitud = 6;
clave=clave.value;
clave2=clave2.value;
	if (clave.length < caract_longitud) {
	alert('Tu clave debe constar de ' + caract_longitud + ' caracteres.');
	document.getElementById("frm_clave").focus()
	}	
	if (clave.indexOf(caract_invalido) > -1) {
	alert("Las claves no pueden contener espacios");
	document.getElementById("frm_clave").focus();
	}
	else {
			if (clave != clave2) {
			alert ("Las claves introducidas no son iguales");
			document.getElementById("frm_clave").focus();
			}
   }
}
//----funcion ocultar fila 
function ocultar_fila(campo){
	fila=document.getElementById(campo);
	fila.style.display='none';
	fila.style.display='none';
	
}
//----funcion mostrar fila 
function mostrar_fila(campo){
	fila=document.getElementById(campo);
	fila.style.display='';
	fila.style.display='';
}
//----funcion para buscar consulta
function buscar(consulta,tipo_consulta,numero_columnas)
{
	//seleccion de busqueda
	document.getElementById("campo").innerHTML='<img src="../css/ajax-loader.gif" width="25" height="25">' 
	contenedor=document.getElementById("contenedor").value;
	if(numero_columnas==-1)//en caso que seleccione fecha
	{
	numero_columnas=contenedor;	
	contenedor=document.getElementById("numero").value;
	}
	
	value=contenedor+'//'+tipo_consulta+'//'+numero_columnas
	
	
		 jQuery.ajax({		 
            type: "POST",
            url:'../consultas/'+consulta,
			async: false,
			data:{value:value},
            success:function(respuesta){
			 setTimeout(function(){
			  if(/Error en tiempo de Ejecucion, Reportar Error al Administrador/.test(respuesta)){
			 	alert("Error en tiempo de Ejecucion, Reportar Error al Administrador");
			 	window.top.location ="../index.php";
			  }
			  document.getElementById("campo").innerHTML=respuesta
			  document.getElementById("contenedor").focus();
			  }, 800);
			},
           error: function () {
		      alert("Error inesperado en buscar consulta")
			  window.top.location="../index.php";	
			}
        });
	return result;
}
//funcion para busquedas de contratacion directa
function buscar_contratacion(consulta,tipo_consulta,numero_columnas)
{
	//seleccion de busqueda
	document.getElementById("campo").innerHTML='<img src="../css/ajax-loader.gif" width="25" height="25">' 
	contenedor=document.getElementById("contenedor").value;
	value=contenedor+'//'+tipo_consulta+'//'+numero_columnas
		 jQuery.ajax({		 
            type: "POST",
            url:'../consultas/'+consulta,
			async: false,
			data:{value:value},
            success:function(respuesta){
			 setTimeout(function(){
			  if(/Error en tiempo de Ejecucion, Reportar Error al Administrador/.test(respuesta)){
			 	alert("Error en tiempo de Ejecucion, Reportar Error al Administrador");
			 	window.top.location ="../index.php";
			  }
			  document.getElementById("campo").innerHTML=respuesta
			  document.getElementById("contenedor").focus();
			  }, 800);
			},
           error: function () {
		      alert("Error inesperado")
			  window.top.location="../index.php";	
			}
        });
	return result;
}




//funcion foco inicial 
function foco_inicial(campo){
	document.getElementById(campo).focus() 
}
//selecciona el valor en las grillas
function seleccionar_opciones_grillas(valores,campos,numero){
	var val = valores.split('-');
	var elem = campos.split('-');
	for(x=0;x<numero;x++){
		document.getElementById(elem[x]).value=val[x];
	}
}
//funcion validar porcentaje
function validar_porcentaje(campo,v_min,v_max){
	respuesta=document.getElementById("d_"+campo);				    respuesta.innerHTML=""    
	v_max=parseInt(v_max);
	v_min=parseInt(v_min);
	var valor=document.getElementById(campo).value;
	if(valor!=""){
		if(valor<v_min || valor>v_max){
			respuesta.innerHTML="Valor incorrecto de Porcentaje"
		}else{
			respuesta.innerHTML="Valor Correcto"
		}
	}else{
		respuesta.innerHTML="Este Campo es requerido"
	}
}
//funcion para activar otro tipo de contrato
//validaciones formulario contratacion directa
function otro_contrato() {
	valor=document.getElementById("frm_tipocon").value;
	campo=document.getElementById("frm_otro");
	if (valor==9) campo.style.display='';
	else campo.style.display='none';
	
		}
		//validar hora
//validacion para existencia del archivo

function verificar_archivo_existe(archivo,proceso,modulo,etiqueta)
{
	//proceso=campo=document.getElementById("num_proceso").value;
	archivo=proceso+archivo;
	var value=8+"//"+archivo+"/"+modulo;
	
					 jQuery.ajax({	
            type: "POST",
            url:'../clases/verificar/verificaciones_generales_archivos.php',
			async: false,
			data:{value:value},
            success:function(respuesta){
					 document.getElementById(etiqueta).innerHTML=""; 
					 document.getElementById(etiqueta).innerHTML=respuesta 
				
			},
            error: function () {
				  alert("Error inesperado")
				  window.top.location="../index.php";
			}
			
        });
		
}

//funcion validar con fecha
function verificar_archivo_existe_otros(archivo,proceso,modulo,etiqueta,fecha,cod_secretaria)
{
	//proceso=campo=document.getElementById("num_proceso").value;
	
	archivo=proceso+archivo;
	var value=9+"//"+archivo+"/"+modulo+"/"+fecha+"/"+cod_secretaria+"/"+proceso;
	
			 jQuery.ajax({	
            type: "POST",
            url:'../clases/verificar/verificaciones_generales_archivos.php',
			async: false,
			data:{value:value},
            success:function(respuesta){
					 document.getElementById(etiqueta).innerHTML=""; 
					 document.getElementById(etiqueta).innerHTML=respuesta 
				
			},
            error: function () {
				  alert("Error inesperado")
				  window.top.location="../index.php";
			}
			
        });
		
}


//funcion para agrgar banco de proyectos
function agregar() {
	
 var n = $('tr:last td', $("#banco")).length;
 alert(n)
     var tds = '<tr>';
     for(var i = 0; i < n; i++){
         tds += '<td>Codigo Banco</td>';
     }
     tds += '</tr>';
 
     $("#banco").append(tds);    
}
//separador de miles para funcion
function puntitos(donde,caracter,campo)
{

var decimales = false
campo = eval("donde.form." + campo)
var campo=document.getElementById("frm_cuantia").value;
	for (d =0; d < campo.length; d++)
		{
		if(campo[d].checked == true)
			{
			//dec = new Number(campo[d].value)
			dec = 2;
			break;
			}
		}
	dec = 2;
	if (dec != 0)
		{decimales = true}




pat = /[\*,\+,\(,\),\?,\\,\$,\[,\],\^]/
valor = donde.value
largo = valor.length
crtr = true
if(isNaN(caracter) || pat.test(caracter) == true)
	{
	if (pat.test(caracter)==true) 
		{caracter = "\\" + caracter}
	carcter = new RegExp(caracter,"g")
	valor = valor.replace(carcter,"")
	donde.value = valor
	crtr = false
	}
else
	{
	var nums = new Array()
	cont = 0
	for(m=0;m<largo;m++)
		{
		if(valor.charAt(m) == "." || valor.charAt(m) == " " || valor.charAt(m) == ",")
			{continue;}
		else{
			nums[cont] = valor.charAt(m)
			cont++
			}
		
		}
	}

if(decimales == true) {
	ctdd = eval(1 + dec);
	nmrs = 1
	}
else {
	ctdd = 1; nmrs = 3
	}
var cad1="",cad2="",cad3="",tres=0
if(largo > nmrs && crtr == true)
	{
	for (k=nums.length-ctdd;k>=0;k--){
		cad1 = nums[k]
		cad2 = cad1 + cad2
		tres++
		if((tres%3) == 0){
			if(k!=0){
				cad2 = "." + cad2
				}
			}
		}
		
	for (dd = dec; dd > 0; dd--)	
	{cad3 += nums[nums.length-dd] }
	if(decimales == true)
	{cad2 += "," + cad3}
	 donde.value = cad2
	}
donde.focus()
}	
//separador de miles especificando el campo
//separador de miles para funcion
function comas(donde,caracter,campo)
{

var decimales = false
campo = eval("donde.form." + campo)
var campo=document.getElementById("frm_cuantia").value;
	for (d =0; d < campo.length; d++)
		{
		if(campo[d].checked == true)
			{
			//dec = new Number(campo[d].value)
			dec = 2;
			break;
			}
		}
	dec = 2;
	if (dec != 0)
		{decimales = true}




pat = /[\*,\+,\(,\),\?,\\,\$,\[,\],\^]/
valor = donde.value
largo = valor.length
crtr = true
if(isNaN(caracter) || pat.test(caracter) == true)
	{
	if (pat.test(caracter)==true) 
		{caracter = "\\" + caracter}
	carcter = new RegExp(caracter,"g")
	valor = valor.replace(carcter,"")
	donde.value = valor
	crtr = false
	}
else
	{
	var nums = new Array()
	cont = 0
	for(m=0;m<largo;m++)
		{
		if(valor.charAt(m) == "." || valor.charAt(m) == " " || valor.charAt(m) == ",")
			{continue;}
		else{
			nums[cont] = valor.charAt(m)
			cont++
			}
		
		}
	}

if(decimales == true) {
	ctdd = eval(1 + dec);
	nmrs = 1
	}
else {
	ctdd = 1; nmrs = 3
	}
var cad1="",cad2="",cad3="",tres=0
if(largo > nmrs && crtr == true)
	{
	for (k=nums.length-ctdd;k>=0;k--){
		cad1 = nums[k]
		cad2 = cad1 + cad2
		tres++
		if((tres%3) == 0){
			if(k!=0){
				cad2 = "." + cad2
				}
			}
		}
		
	for (dd = dec; dd > 0; dd--)	
	{cad3 += nums[nums.length-dd] }
	if(decimales == true)
	{cad2 += "," + cad3}
	 donde.value = cad2
	}
donde.focus()
}	