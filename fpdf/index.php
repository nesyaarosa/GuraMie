<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
//$pdf->Table('C');
// membuat halaman baru
$pdf->AddPage();
//hor,ver,ukuran
$pdf->Image('logo.png', 5,5,55);
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

// mencetak string 
$pdf->Cell(190,7,'DAFTAR NAMA PEMBELI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'TOKO GURAMIE',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'',0,0,'C');
$pdf->Cell(30,6,'lastname',1,0,'C');
$pdf->Cell(30,6,'firstname',1,0,'C');
$pdf->Cell(30,6,'address1',1,0,'C');
$pdf->Cell(25,6,'city',1,0,'C');
$pdf->Cell(30,6,'phone',1,1,'C');
$pdf->SetFont('Arial','',10);


include 'koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from ps_address");
while ($row = mysqli_fetch_array($mahasiswa)){
$pdf->Cell(25,6,'',0,0,'C');
    $pdf->Cell(30,6,$row['lastname'],1,0);
    $pdf->Cell(30,6,$row['firstname'],1,0);
    $pdf->Cell(30,6,$row['address1'],1,0);
	$pdf->Cell(25,6,$row['city'],1,0);
    $pdf->Cell(30,6,$row['phone'],1,1); 
}
	$pdf->Cell(15,7,'',0,1);
    $pdf->Cell(15,7,'',0,1);
	$pdf->Cell(15,7,'',0,1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(325,10,'Pekanbaru, 3 Agustus 2018',0,1,'C');
	$pdf->Cell(15,7,'',0,1);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(325,10,'CEO GuraMie',0,1,'C');
$pdf->Output();
?>
