<?php

//hablamos a la libreria
require('libraries/fpdf/fpdf.php');

//creamos una nueva pagina 
$pdf = new FPDF();
$pdf->AddPage();

//-->insertamos imagen   
//            ubicacion x, ubicacion y tamaño
$pdf->Image('images/logo_sep.jpg',20,8,33);
$pdf->Cell(60,10,'',0,1); //salto de linea


// -->imprimirmos titulo
$pdf->SetFont('Arial','B',7); //tipo de letra
$pdf->SetTextColor(255,255,255);  // Establece el color del texto (en este caso es blanco) 
$pdf->SetFillColor(0, 0, 0); // establece el color del fondo de la celda (en este caso es negro) 
$pdf->Cell(160,6,'BOLETA DE CALIFICACIONES',1,1,'C','true');

//-->datos de boleta
$pdf->SetTextColor(0,0,0); //color de letra
$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(17,5,'SUBSISTEMA:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(80,5,'DIRECCIÓN GENERAL DE EDUCACIÓN TECNOLÓGICA INDUSTRIAL',0,1);

$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(12,0,'PLANTEL:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(68,0,'CBTIS NO. 72',0,0);
$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(14,0,'CARRERA:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(66,0,'BD',0,1);

$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(38,5,'CLAVE DEL CENTRO DE TRABAJO:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(42,5,'23DCT0245M',0,0);
$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(10,5,'TURNO:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(70,5,'BD',0,1);

$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(18,0,'NO. CONTROL:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(62,0,'BD',0,0);
$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(10,0,'GRUPO:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(70,0,'BD',0,1);

$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(14,5,'NOMBRE:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(66,5,'BD',0,0);
$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(18,5,'GENERACIÓN:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(62,5,'BD',0,1);

$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(15,0,'SEMESTRE:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(65,0,'BD',0,0);
$pdf->SetFont('Arial','B',6); //tipo de letra
$pdf->Cell(15,0,'MODALIDAD:',0,0);
$pdf->SetFont('Arial','',6);
$pdf->Cell(65,0,'??',0,1);

//-->linea
$pdf->SetDrawColor(0,0,0);
//$pdf->Line(40,64,150,64);

//salto de linea con una celda
$pdf->Cell(65,6,'',0,1);

$pdf->SetFont('Arial','B',6); //tipo de letra

//->Titulo de las celdas de la tabla
$pdf->Cell(40,6,'MATERIAS:',1,0);
$pdf->Cell(60,6,'ASIGNATURA/MODULO:',1,0);
$pdf->Cell(10,6,'1ER.P.',1,0,'C');
$pdf->Cell(10,6,'2ER.P.',1,0,'C');
$pdf->Cell(10,6,'3ER.P.',1,0,'C');
$pdf->Cell(10,6,'1ER.A.',1,0,'C');
$pdf->Cell(10,6,'2ER.A.',1,0,'C');
$pdf->Cell(10,6,'3ER.A.',1,1,'C');

//->rellenar celdas con datos de bd
$pdf->SetFont('Arial','',6); //tipo de letra

$pdf->Cell(40,6,'',1,0);
$pdf->Cell(60,6,'',1,0);
$pdf->Cell(10,6,'',1,0,'C');
$pdf->Cell(10,6,'',1,0,'C');
$pdf->Cell(10,6,'',1,0,'C');
$pdf->Cell(10,6,'',1,0,'C');
$pdf->Cell(10,6,'',1,0,'C');
$pdf->Cell(10,6,'',1,1,'C');

//--> firma

$pdf->Cell(160,10,'',0,1);

$pdf->Cell(160,6,'HECTOR VEGA SANTAMARIA',0,1,'C');
$pdf->Cell(160,8,'',0,1);
//$pdf->Line(70,105,110,105);
$pdf->Cell(160,6,'EL DIRECTOR DEL PLANTEL',0,1,'C');

$pdf->Output();

?>