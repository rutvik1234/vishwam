<?php
include('db.php');
require('fpdf/fpdf.php');

if (!isset($_POST['filtered_data'])) {
    die("No data to export.");
}

$data = json_decode($_POST['filtered_data'], true);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(190, 10, 'Filtered Transaction Report', 1, 1, 'C');
$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'add_id', 1);
$pdf->Cell(50, 10, 'add_amount', 1);
$pdf->Cell(40, 10, 'add_comm', 1);
$pdf->Cell(50, 10, 'stage', 1);
$pdf->Ln();

$pdf->SetFont('Arial', '', 12);

foreach ($data as $row) {
    $pdf->Cell(40, 10, $row[0], 1);
    $pdf->Cell(50, 10, $row[1], 1);
    $pdf->Cell(40, 10, $row[2], 1);
    $pdf->Cell(50, 10, $row[3], 1);
    $pdf->Ln();
}

$pdf->Output('D', 'Filtered_Transaction_Report.pdf');
?>
