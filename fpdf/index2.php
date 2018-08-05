<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
//$pdf->Table('C');
// membuat halaman baru
$pdf->AddPage();
$pdf->Image('pcr.png', 75,25,65);
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(190,7,'DAFTAR MATA KULIAH',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'JURUSAN TEKNIK INFORMATIKA',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(500,15,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(35 ,6,'Kode',1,0,'C');
$pdf->Cell(55,6,'Nama Mata Kuliah',1,0,'C');
$pdf->Cell(70,6,'Nama Dosen',1,0,'C');
$pdf->Cell(32,6,'Jumlah SKS',1,1,'C');

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$matkul = mysqli_query($connect, "select * from matakuliah");
while ($row = mysqli_fetch_array($matkul)){
    $pdf->Cell(35,6,$row['kodematkul'],1,0);
    $pdf->Cell(55,6,$row['namamatkul'],1,0);
    $pdf->Cell(70,6,$row['namadosen'],1,0);
    $pdf->Cell(32,6,$row['jumlahsks'],1,1); 
}
	$pdf->Cell(15,7,'',0,1);
    $pdf->Cell(15,7,'',0,1);
	$pdf->Cell(15,7,'',0,1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(325,10,'Pekanbaru, 2 Juli 2018',0,1,'C');
	$pdf->Cell(15,7,'',0,1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(325,10,'Nesya Anfasha Rosa',0,1,'C');
$pdf->Output();
?>
