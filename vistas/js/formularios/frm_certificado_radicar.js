function buscarViabilidades(){
    
    var datos;

    value = document.getElementById("input_buscar").value;
    
    jQuery.ajax({	
        type: 'POST',
        url:'../../modelo/CargarCertificadosRadicar.php',
        async: true,
        data:{value:value},
        success:function(respuesta){
            
            document.getElementById('resultado').innerHTML='<p>'+ respuesta + '</p>';

        },

        error: function () {
            alert("Error inesperado")
            window.top.location ="../index.html";	
        }
        
    });
    
}

function vercertificado(cod){
    
    value = cod;
    
    jQuery.ajax({   
        type: 'POST',
        url:'../../certificados/certificadoRadicar.php',
        async: true,
        data:{value:value},
        success:function(respuesta){
            
          alert(respuesta)

        },

        error: function () {
            alert("Error inesperado")
            window.top.location ="../index.html";   
        }
        
    });
    
}

