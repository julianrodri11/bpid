<?php 
session_start();
 ?>

 <?php
require_once '../../modelo/ObtenerDatosCertificadoRadicar.php';
require_once '../../librerias/fpdf/fpdf.php';
require_once '../../librerias/fpdf/PDF.php';
require_once '../../librerias/DisenoCertificacionesPDF.php';

$datos=new ObtenerDatosCertificadoRadicar();
$cod_bpid=1;
$datos->setDatos($cod_bpid);

$pdf=new PDF('P','mm','A4'); // vertical, milimetros y tamaño
$pdf->SetMargins(20, 15 ,40); 
$cadena='Que el proyecto abajo referenciado , previo cumplimiento de los requisitos establecidos en el articulo,Que el proyecto abajo referenciado , previo cumplimiento de los requisitos establecidos en el articulo,se encuentra RADICADO en el Banco de Programas Y proyectos  de Inversion Publica del Departamento de Nariño-BPID, de acuerdo con la siguiente informacion';
$cadena=utf8_decode($cadena);
//$pdf->Open();
	$pdf->AddPage(); 
	$pdf->Ln(10); 
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(170,6,'FICHA DE RADICACION',0,0,'C');
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',11);
	DisenoCertificacionesPDF::justificarParrafo($cadena,1,$pdf); 
	$pdf->Ln(7);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(60,6,utf8_decode('Codigo Radicacion'),0,0); 
	$pdf->Cell(68,6,utf8_decode('Fecha Radicacion'),0,0); 
	$pdf->Cell(78,6,utf8_decode('Hora Radicacion'),0,0); 
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(60,6,utf8_decode($datos->getCodigoRadicacion()),0,0); 
	$pdf->Cell(68,6,utf8_decode('06-07-2017'),0,0); 
	$pdf->Cell(78,6,utf8_decode('11:38:00'),0,0); 
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',11);$pdf->Cell(60,6,utf8_decode('Nombre Programa o Proyecto:'),0,0);
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);$pdf->Cell(60,6,utf8_decode('Nombre Programa'),0,0);
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(60,6,utf8_decode('Sector de Inversion:'),0,0); 
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(60,6,utf8_decode('Aqui sector'),0,0); 
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(60,6,utf8_decode('Localizacion Especifica:'),0,0); 
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(60,6,utf8_decode('Aqui lugar'),0,0);
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(60,6,utf8_decode('Entidad Proponente:'),0,0); 
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(60,6,utf8_decode('Aqui sector'),0,0); 
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(60,6,utf8_decode('Entidad Ejecutora:'),0,0); 
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(60,6,utf8_decode('Aqui lugar'),0,0); 
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(60,6,utf8_decode('Responsable Proyecto:'),0,0); 
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(68,6,utf8_decode('Aqui sector'),0,0); 
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(60,6,utf8_decode('Numero Identificacion:'),0,0); 
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(60,6,utf8_decode('Aqui lugar'),0,0);
	$pdf->Ln(5);
	$pdf->SetFont('Arial','B',11);
	$pdf->Cell(60,6,utf8_decode('Direccion:'),0,0); 
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(60,6,utf8_decode('Aqui sector'),0,0); 
	$pdf->Ln(5);
	$pdf->Cell(60,6,utf8_decode('Telefono'),0,0); 
	$pdf->Cell(68,6,utf8_decode('Fax'),0,0); 
	$pdf->Cell(78,6,utf8_decode('Celular'),0,0); 
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',11);
	$pdf->Cell(60,6,utf8_decode('Aqui Codigo'),0,0); 
	$pdf->Cell(68,6,utf8_decode('06-07-2017'),0,0); 
	$pdf->Cell(78,6,utf8_decode('11:38:00'),0,0); 
$pdf->Output();	
?>

