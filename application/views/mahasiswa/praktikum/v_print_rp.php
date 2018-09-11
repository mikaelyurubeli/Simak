<?php
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("P","cm", "A4");

// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
$this->fpdf->SetMargins(3.5,2.5,2);
/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
di footer, nanti kita akan membuat page number dengan format : number page / total page
*/
$this->fpdf->AliasNbPages();

// AddPage merupakan fungsi untuk membuat halaman baru
$this->fpdf->AddPage();

// Setting Font : String Family, String Style, Font size
$this->fpdf->SetFont('Times','b',14);

/*Header*/
$this->fpdf->Ln(3);
$this->fpdf->Cell(16.5, 1,strtoupper($title), 0, 0, 'C');
$this->fpdf->Ln(2);
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(3, 0.5, 'Nama', 0, 0, 'L'); 
$this->fpdf->Cell(1, 0.5, ':', 0, 0, 'C');
$this->fpdf->Cell(5, 0.5, $mahasiswa['nama'], 0, 0, 'L');

$this->fpdf->Ln(0.5);
$this->fpdf->Cell(3, 0.5, 'No Registrasi', 0, 0, 'L');
$this->fpdf->Cell(1, 0.5, ':', 0, 0, 'C');
$this->fpdf->Cell(5, 0.5, $mahasiswa['noreg'], 0, 0, 'L');
$this->fpdf->Ln(0.5);
$this->fpdf->Cell(3, 0.5, 'Program Studi', 0, 0, 'L');
$this->fpdf->Cell(1, 0.5, ':', 0, 0, 'C');
$this->fpdf->Cell(5, 0.5, $mahasiswa['program_studi'], 0, 0, 'L');
$this->fpdf->Ln(0.5);

$this->fpdf->Ln(1);
$this->fpdf->SetFont('Times','b',10);
$this->fpdf->Cell(1, 0.5, 'No', 0, 0, 'L');
$this->fpdf->Cell(3, 0.5, 'Kode', 0, 0, 'L');
$this->fpdf->Cell(6, 0.5, 'Nama Praktikum', 0, 0, 'L');
$this->fpdf->Cell(6, 0.5, 'Nama Dosen', 0, 0, 'L');
$this->fpdf->Ln();
$i = 1;
foreach($rp as $u){

$cell = 0.5;
$this->fpdf->SetFont('Times','',10);
$this->fpdf->Cell(1, $cell, $i++, 0, 0, 'L');
$this->fpdf->Cell(3, $cell, $u->kode_praktikum, 0, 0, 'L');
$this->fpdf->Cell(6, $cell, $u->nama_praktikum, 0, 0, 'L');
$this->fpdf->Cell(6, $cell, $u->dosen, 0, 0, 'L');
$this->fpdf->Ln(); 
}

$this->fpdf->Rect(3.5, 10, 1, 0.5);
$this->fpdf->Rect(4.5, 10, 3, 0.5);
$this->fpdf->Rect(7.5, 10, 6, 0.5);
$this->fpdf->Rect(13.5, 10, 6, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 10.5, 1, 0.5);
$this->fpdf->Rect(4.5, 10.5, 3, 0.5);
$this->fpdf->Rect(7.5, 10.5, 6, 0.5);
$this->fpdf->Rect(13.5, 10.5, 6, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 11, 1, 0.5);
$this->fpdf->Rect(4.5, 11, 3, 0.5);
$this->fpdf->Rect(7.5, 11, 6, 0.5);
$this->fpdf->Rect(13.5, 11, 6, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 11.5, 1, 0.5);
$this->fpdf->Rect(4.5, 11.5, 3, 0.5);
$this->fpdf->Rect(7.5, 11.5, 6, 0.5);
$this->fpdf->Rect(13.5, 11.5, 6, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 12, 1, 0.5);
$this->fpdf->Rect(4.5, 12, 3, 0.5);
$this->fpdf->Rect(7.5, 12, 6, 0.5);
$this->fpdf->Rect(13.5, 12, 6, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 12.5, 1, 0.5);
$this->fpdf->Rect(4.5, 12.5, 3, 0.5);
$this->fpdf->Rect(7.5, 12.5, 6, 0.5);
$this->fpdf->Rect(13.5, 12.5, 6, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 13, 1, 0.5);
$this->fpdf->Rect(4.5, 13, 3, 0.5);
$this->fpdf->Rect(7.5, 13, 6, 0.5);
$this->fpdf->Rect(13.5, 13, 6, 0.5);
$this->fpdf->Ln();


/*End of Header*/

/*Main*/

/*End of Main*/

/*End of Footer*/
$this->fpdf->Output('Bukti Daftar Praktikum-'.$mahasiswa['noreg'].'.pdf', "I");
?>
