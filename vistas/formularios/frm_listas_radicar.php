
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BPID</title>
	<?php require_once '../links.php';?>
        <script type="text/javascript" src="../js/formularios/frm_listas_radicar.js"></script>
	<script type="text/javascript" src="../../modelo/fun_propias/validacion_campos.js"></script>
        <link type="text/css" rel="stylesheet" href="../css/cssbpid/styles.css">
</head>

<body onload="buscarViabilidades('0');">
        
    
    
    <div id="d_error" title="ALERTA"></div>
    <div id="d_ingreso" title="INFORMACION"></div>
    
    
    <?php require_once '../menu.php';?>
    <form id='frm_radicar_listas' name='frm_radicar_listas' onSubmit="return false"  enctype="multipart/form-data">
        
       
        <div class="col s12 m11 l9">
            <div class="bajar">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col s12 m12 l12 center-align"><div class="titulofrm">PROYECTOS RADICADOS</div></div>
                        <br><br>
                    </div>
                    <div class="row">
                        <div class="col s12 m10 l10">
                            <div class="row">
                                <div class="input-field col s12 m12 l12">
                                    <div class="opcionesbtn">
                                        <div class="file-field input-field">
                                            <div class="btn" onclick="buscarViabilidades('1');">
                                                <span>Buscar proyecto</span>
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input id="input_buscar" class="file-path validate" type="text" placeholder="Buscar..." onkeydown="buscarViabilidades();">
                                            </div>
                                        </div>
                                        <div class="descripcion">&nbsp;&nbsp;&nbsp;Realiza la búsqueda por numero o nombre del proyecto</div>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="resultado" class="row">
                                
                                
                                
                            </div>
                            
                        </div>
                    </div>

                  
                    

                <!--div class="col s12 m12 l12">
                        <?php require_once "footer.php";?>
                </div-->
                    </div>
                </div>
            </div>
        </div>
    </form>
    
</body>