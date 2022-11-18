<?php

include_once("./fpdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetTitle('Relación 7: 6.-FPDF');
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Galeria de imagenes');
$pdf->Ln();
$pdf->Cell(40,10,'Elige tu plan de compra');
$pdf->Image('./imagenes/elephant-gd7e9a9d0f_640.jpg',$x=5, $y=50, $w=50, $h=50);
$pdf->Image('./imagenes/fish-g957c8d810_640.png',$x=75, $y=50, $w=50, $h=50);
$pdf->Image('./imagenes/houses-g6afb206e5_640.jpg',$x=150, $y=50, $w=50, $h=50);
$pdf->Image('./imagenes/landscape-gfae105c9d_640.jpg',$x=5, $y=125, $w=50, $h=50);
$pdf->Image('./imagenes/watermelon-g886b6656c_640.png',$x=75, $y=125, $w=50, $h=50);
$pdf->Image('./imagenes/pizza-6682514__340.jpg',$x=150, $y=125, $w=50, $h=50);
$pdf->Output();

?>