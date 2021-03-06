
<?php
require_once "../librerias/ValidarDatos.php";
function autoload($clase)
{
   require_once "../modelo/" . $clase . ".php";
}
spl_autoload_register('autoload');

class ControladorRadicar{
	
	private $radicar;
    private $banco;
	//atributos de la tabl radicar
	private	$numero_proyecto;
	private	$nombre_proyecto;
	private	$sector;
	private	$localizacion;
	private	$valor;
	private	$eje;
	private	$programa;
	private	$subprograma;
	private	$poai;
	private	$entidad_proponente;
	private	$entidad_ejecutante;
	private	$num_id_responsable;
	private	$nom_responsable;
	private	$cargo_responsable;
	private	$direccion_responsable;
	private	$telefono_responsable;
	private	$cel_responsable;
	private	$correo_responsable;
	private	$id_usuario;
	private	$nombre_usuario;
	private	$observaciones;
	private $cod_usuario_ingreso;
	private $cod_activacion;
	private $cod_secretaria;
	
		
	public function iniciar($valores)
	{
		
		            if($this->validar_vacios($valores)){
                    $this->asignar ($valores);
                    if($this->validar())
                        $this->radicar=new MRadicar();
                     	return $this->radicar->ingresarRadicar(
                                                    $this->numero_proyecto,
                                                    $this->nombre_proyecto,
                                                    $this->sector,
                                                    $this->localizacion,
                                                    $this->valor,
                                                    $this->eje,
                                                    $this->programa,
                                                    $this->subprograma,
                                                    $this->poai,
                                                    $this->entidad_proponente,
                                                    $this->entidad_ejecutante,
                                                    $this->num_id_responsable,
                                                    $this->nom_responsable,
                                                    $this->cargo_responsable,
                                                    $this->direccion_responsable,
                                                    $this->telefono_responsable,
                                                    $this->cel_responsable,
                                                    $this->correo_responsable,
                                                    $this->id_usuario,
                                                    $this->nombre_usuario,
                                                    $this->observaciones,
                                                    $this->cod_usuario_ingreso,
                                                    $this->cod_secretaria,
                                                    $this->cod_activacion);
                }
		
	}

	public function asignar($valores)
	{
		$this->numero_proyecto=$valores[0];
		$this->nombre_proyecto=$valores[1]; 
		$this->sector=$valores[2];
		$this->localizacion=$valores[3];
		$this->valor=$valores[4];
		$this->eje=$valores[5];
		$this->programa=$valores[6];
		$this->subprograma=$valores[7];
		$this->poai=$valores[8];
		$this->entidad_proponente=$valores[9];
		$this->entidad_ejecutante=$valores[10];
		$this->num_id_responsable=$valores[11];
		$this->nom_responsable=$valores[12];
		$this->cargo_responsable=$valores[13];
		$this->direccion_responsable=$valores[14];
		$this->telefono_responsable=$valores[15];
		$this->cel_responsable=$valores[16];
		$this->correo_responsable=$valores[17];
		$this->id_usuario=$valores[18];
		$this->nombre_usuario=$valores[19];
		$this->observaciones=$valores[20];
		$this->cod_usuario_ingreso=1;//variable de sesion
		$this->cod_activacion=1;
		$this->cod_secretaria=1;
	}
        
	public function validar_vacios($valores)
	{
		$cont=0;
		foreach($valores as $campo)
			if(empty($campo))
				$cont++;
				
		if($cont>0)
			return false;
		else
			return true;
	}
        
	public function validar(){
		
		$correo =new ValidarDatos();
		return $correo->validarEmail($this->correo_responsable);
	}
	
}

$valores = trim(($_POST["value"]));
$valores = explode("//", $valores);
$radicar=new ControladorRadicar();
echo $radicar->iniciar($valores);
    


?>