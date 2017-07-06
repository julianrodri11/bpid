<?php
require_once 'ConexionPDO.php';
	
	class ObtenerDatosCertificadoRadicar
	{
		
		private $con;
		private $codigoRadicacion;
		private $fechaRadicacion;

		public function __construct()
		{
			$this->con=new ConexionPDO();

		}

		public function setDatos($cod_bpid)
		{
			$consulta="select * from radicacion where cod_bpid=$cod_bpid";
			$res=$this->con->consultar($consulta);
			if(count($res>0)){
				foreach ($res as $fila) {
					$this->codigoRadicacion=$fila[0];//depende consulta
					$this->fechaRadicacion=$fila[1];	
				}
			}

		}

		public function getCodigoRadicacion()
		{
			return $this->codigoRadicacion;
		}
		public function getFechaRadicacion()
		{
			return $this->FechaRadicacion;
		}


	}	

?>