$('#div_carga')
.hide()
.ajaxStart(function() {
var width;
var height;
width = $('body').css('width')
height = $('body').css('height')
$('#div_carga').css('width',width)
$('#div_carga').css('height',height)
$(this).show();
})
.ajaxStop(function() {
$(this).hide();
})
;

