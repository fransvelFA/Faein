<?php 
require('fpdf/fpdf.php');

class PDF extends FPDF
{

	function Header()
	{

		$this->Image('logo.jpg',10,8,33);

		$this->SetFont('Arial','',12);

		$this->Cell(80);

		$this->Cell(30,10,'FICHA TECNICA ALUMNO',0,0,'C');

		$this->Ln(15);
		$this->Cell(30,10,'Codigo',1,0,'C',0);
		$this->Cell(60,10,'Nombre del alumno',1,0,'C',0);
		$this->Cell(40,10,'Carrera',1,0,'C',0);
		$this->Cell(50,10,'Fecha de nacimiento',1,1,'C',0);
	}
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,'Pagina'.$this->PageNo().'/{nb}',0,0,'C');
	}
}
require 'genera.php';
$nombre_a=$_POST['nombre_a'];
$consulta = "SELECT * FROM alumno WHERE nom_a='$nombre_a'";
$resultado=$mysqli->query($consulta);

$pdf=new PDF('L','mm','Legal');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

while($row = $resultado->fetch_assoc()){

	$pdf->Cell(30,10,$row['codigo'],1,0,'C',0);
	$pdf->Cell(60,10,$row['nom_a'],1,0,'C',0);
	$pdf->Cell(40,10,$row['carrera'],1,0,'C',0);
	$pdf->Cell(50,10,$row['f_n'],1,1,'C',0);
}
$pdf->OutPut();
 ?>
