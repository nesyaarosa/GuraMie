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
$pdf->Cell(190,7,'DAFTAR NAMA MAHASISWA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'JURUSAN TEKNIK INFORMATIKA',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,15,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25 ,6,'NIM',1,0,'C');
$pdf->Cell(75,6,'NAMA MAHASISWA',1,0,'C');
$pdf->Cell(30,6,'NO HP',1,0,'C');
$pdf->Cell(32,6,'TANGGAL LAHIR',1,1,'C');

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from mahasiswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(25,6,$row['nim'],1,0);
    $pdf->Cell(75,6,$row['nama_lengkap'],1,0);
    $pdf->Cell(30,6,$row['no_hp'],1,0);
    $pdf->Cell(32,6,$row['tanggal_lahir'],1,1); 
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
