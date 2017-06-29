
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BPID</title>
	<?php require_once '../links.php';?>
        <script type="text/javascript" src="../js/formularios/frm_listas_radicar.js"></script>
	<script type="text/javascript" src="../../modelo/fun_propias/validacion_campos.js"></script>
        <script>
        $( function() {
          $( "#accordion" ).accordion();
        });
        
        $( function() {
          $( "#accordion2" ).accordion();
        });
        </script>
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
                        <div class="col s12 m12 l12 center-align"><div class="titulofrm">LISTA GENERAL</div></div>
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
                            
                            <div id="accordion">
  <h3>Section 1</h3>
  <div>
<div id="accordion2">
  <h3>Section 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
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