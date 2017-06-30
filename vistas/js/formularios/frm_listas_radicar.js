function buscarViabilidades(){
    
    var datos;

    value = document.getElementById("input_buscar").value;
    
    jQuery.ajax({	
        type: 'POST',
        url:'../../modelo/CargarRadicados.php',
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

function mas(cod){
    
    document.getElementById("mas").style.display = "block";
    document.body.style.overflow = "hidden";
    
    jQuery.ajax({	
        type: 'POST',
        url:'../../modelo/consultas/frmListas.php',
        async: true,
        data:{value:value},
        success:function(respuesta){
            
            document.getElementById('list').innerHTML='<p>'+ respuesta + '</p>';

        },

        error: function () {
            alert("Error inesperado")
            window.top.location ="../index.html";	
        }
        
    });
    
}

function cerrarFrmExterno(id){
    
    document.getElementById(id).style.display = "none";
    document.body.style.overflow = "scroll";
    
}
