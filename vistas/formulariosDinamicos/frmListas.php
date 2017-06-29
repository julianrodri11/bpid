<?php

require_once '../../modelo/CargarListas.php';

$lista = CargarListas::getListaGeneral();

?>

<div id="listas">

<?php
if(count($lista)){
    foreach($lista as $fila){

?>
    <h3 id="<?php echo $fila[0]; ?>"><?php echo $fila[1]; ?></h3>
<?php
        $lista_requisitos = CargarListas::getRequisitos($fila[0]);
        foreach($lista_requisitos as $fila2){
        ?>
        
        <fieldset>
            <legend><?php echo $fila2[1]; ?></legend>
            <select id="car-type">
                <option>Si</option>
                <option>No</option>
                <option>No aplica</option>
            </select>
        </fieldset>
    
        <?php
        }
    }
}else
    echo 'No hay listas de chequeo.';


?>

</div>
