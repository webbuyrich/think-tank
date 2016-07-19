<?php
require('includes/fpdf.php');



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',24);
$pdf->Cell(0,10,'Think Tank Form Submission', "B",1,"C");
$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(40,10,'Proposal: ',0,0, "R");
$pdf->Cell(80,10,'Become the Best at what you do',0,1);
$pdf->Cell(40,10,'Employee Name: ',0,0, "R");
$pdf->Cell(80,10,'Richard Peterson',0,1);
$pdf->Cell(40,10,'Department: ',0,0, "R");
$pdf->Cell(80,10,'IT Services',0,1);
$pdf->Cell(40,10,'Job Title: ',0,0, "R");
$pdf->Cell(80,10,'Web Developer',0,1);
$pdf->Cell(40,10,'Email Address: ',0,0, "R");
$pdf->Cell(80,10,'rpetersonbcm@gmail.com',0,1);
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,10,'THINK TANK PROPOSAL',0,1);
$pdf->MultiCell(190,22,'Become the Best at what you do',1,1);
$pdf->Cell(50,10,'SUPPORTING INFORMATION',0,1);
$pdf->MultiCell(190,22,'Become the Best at what you do',1,1);
$pdf->Cell(50,10,'PROPOSAL COSTS',0,1);
$pdf->MultiCell(190,22,'Become the Best at what you do',1,1);
$pdf->Cell(50,10,'DIFFERENTIATOR',0,1);
$pdf->MultiCell(190,22,'Become the Best at what you do',1,1);
$pdf->Cell(50,10,'RESOURCES NEEDED',0,1);
$pdf->MultiCell(190,22,'Become the Best at what you do',1,1);
$pdf->Cell(0,20,'BMGL LOGO',0,1,"C");
$pdf->Output('pdfs/demo.pdf', 'F');
?>