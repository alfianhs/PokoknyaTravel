<?php
// memanggil library FPDF
require('library/fpdf.php');
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(200, 10, 'DETAIL TIKET', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(8, 7, 'NO', 1, 0, 'C');
$pdf->Cell(45, 7, 'NAMA', 1, 0, 'C');
$pdf->Cell(15, 7, 'HARGA', 1, 0, 'C');
$pdf->Cell(95, 7, 'DESKRIPSI', 1, 0, 'C');

$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($koneksi, "SELECT  * FROM barang");
while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(8, 6, $no++, 1, 0, 'C');
    $pdf->Cell(45, 6, utf8_decode($d['nama']), 1, 0);
    $pdf->Cell(15, 6, utf8_decode($d['harga']), 1, 0);
    $pdf->MultiCell(95, 6, utf8_decode($d['deskripsi']), 1, 'L');
}

$pdf->Output();


 
?>