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
$this->fpdf->SetFont('Times','',10);

/*Header*/
$this->fpdf->SetFont('Times', '', 10);
$this->fpdf->Cell(16.5, 1, $lampiran, 0, 0, 'L');
$this->fpdf->Ln();
$this->fpdf->SetFont('Times', 'bu', 12);
$this->fpdf->Cell(16.5, 1, $title, 0, 0, 'C');
$this->fpdf->Ln(1.5);
/*End of Header*/

/*Main*/
$cell = 0.5;
$this->fpdf->SetFont('Times', '', 10);
$this->fpdf->Cell(1, $cell, 'No', 0, 0, 'C');
$this->fpdf->Cell(6, $cell, 'Nama Alat' , 0, 0, 'C');
$this->fpdf->Cell(5.5, $cell, 'Spesifikasi Alat', 0, 0, 'C');
$this->fpdf->Cell(2, $cell, 'Jumlah', 0, 0, 'C');
$this->fpdf->Ln();

$i = 1;
foreach($data_alat as $u){
$cell = 0.5;
$this->fpdf->SetFont('Times', '', 10);
$this->fpdf->Cell(1, $cell, $i++, 0, 0, 'C');
$this->fpdf->Cell(6, $cell, $u->nama_alat, 0, 0, 'L');
$this->fpdf->Cell(5.5, $cell, $u->spesifikasi, 0, 0, 'L');
$this->fpdf->Cell(2, $cell, $u->jumlah_peminjaman.' pcs', 0, 0, 'C');
$this->fpdf->Ln();
}

$this->fpdf->Rect(3.5, 5, 1, 0.5);
$this->fpdf->Rect(4.5, 5, 6, 0.5);
$this->fpdf->Rect(10.5, 5, 5.5, 0.5);
$this->fpdf->Rect(16, 5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 5.5, 1, 0.5);
$this->fpdf->Rect(4.5, 5.5, 6, 0.5);
$this->fpdf->Rect(10.5, 5.5, 5.5, 0.5);
$this->fpdf->Rect(16, 5.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 6, 1, 0.5);
$this->fpdf->Rect(4.5, 6, 6, 0.5);
$this->fpdf->Rect(10.5, 6, 5.5, 0.5);
$this->fpdf->Rect(16, 6, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 6.5, 1, 0.5);
$this->fpdf->Rect(4.5, 6.5, 6, 0.5);
$this->fpdf->Rect(10.5, 6.5, 5.5, 0.5);
$this->fpdf->Rect(16, 6.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 7, 1, 0.5);
$this->fpdf->Rect(4.5, 7, 6, 0.5);
$this->fpdf->Rect(10.5, 7, 5.5, 0.5);
$this->fpdf->Rect(16, 7, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 7.5, 1, 0.5);
$this->fpdf->Rect(4.5, 7.5, 6, 0.5);
$this->fpdf->Rect(10.5, 7.5, 5.5, 0.5);
$this->fpdf->Rect(16, 7.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 8, 1, 0.5);
$this->fpdf->Rect(4.5, 8, 6, 0.5);
$this->fpdf->Rect(10.5, 8, 5.5, 0.5);
$this->fpdf->Rect(16, 8, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 8.5, 1, 0.5);
$this->fpdf->Rect(4.5, 8.5, 6, 0.5);
$this->fpdf->Rect(10.5, 8.5, 5.5, 0.5);
$this->fpdf->Rect(16, 8.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 9, 1, 0.5);
$this->fpdf->Rect(4.5, 9, 6, 0.5);
$this->fpdf->Rect(10.5, 9, 5.5, 0.5);
$this->fpdf->Rect(16, 9, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 9.5, 1, 0.5);
$this->fpdf->Rect(4.5, 9.5, 6, 0.5);
$this->fpdf->Rect(10.5, 9.5, 5.5, 0.5);
$this->fpdf->Rect(16, 9.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 10, 1, 0.5);
$this->fpdf->Rect(4.5, 10, 6, 0.5);
$this->fpdf->Rect(10.5, 10, 5.5, 0.5);
$this->fpdf->Rect(16, 10, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 10.5, 1, 0.5);
$this->fpdf->Rect(4.5, 10.5, 6, 0.5);
$this->fpdf->Rect(10.5, 10.5, 5.5, 0.5);
$this->fpdf->Rect(16, 10.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 11, 1, 0.5);
$this->fpdf->Rect(4.5, 11, 6, 0.5);
$this->fpdf->Rect(10.5, 11, 5.5, 0.5);
$this->fpdf->Rect(16, 11, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 11.5, 1, 0.5);
$this->fpdf->Rect(4.5, 11.5, 6, 0.5);
$this->fpdf->Rect(10.5, 11.5, 5.5, 0.5);
$this->fpdf->Rect(16, 11.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 12, 1, 0.5);
$this->fpdf->Rect(4.5, 12, 6, 0.5);
$this->fpdf->Rect(10.5, 12, 5.5, 0.5);
$this->fpdf->Rect(16, 12, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 12.5, 1, 0.5);
$this->fpdf->Rect(4.5, 12.5, 6, 0.5);
$this->fpdf->Rect(10.5, 12.5, 5.5, 0.5);
$this->fpdf->Rect(16, 12.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 13, 1, 0.5);
$this->fpdf->Rect(4.5, 13, 6, 0.5);
$this->fpdf->Rect(10.5, 13, 5.5, 0.5);
$this->fpdf->Rect(16, 13, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 13.5, 1, 0.5);
$this->fpdf->Rect(4.5, 13.5, 6, 0.5);
$this->fpdf->Rect(10.5, 13.5, 5.5, 0.5);
$this->fpdf->Rect(16, 13.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 14, 1, 0.5);
$this->fpdf->Rect(4.5, 14, 6, 0.5);
$this->fpdf->Rect(10.5, 14, 5.5, 0.5);
$this->fpdf->Rect(16, 14, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 14.5, 1, 0.5);
$this->fpdf->Rect(4.5, 14.5, 6, 0.5);
$this->fpdf->Rect(10.5, 14.5, 5.5, 0.5);
$this->fpdf->Rect(16, 14.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 15, 1, 0.5);
$this->fpdf->Rect(4.5, 15, 6, 0.5);
$this->fpdf->Rect(10.5, 15, 5.5, 0.5);
$this->fpdf->Rect(16, 15, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 15.5, 1, 0.5);
$this->fpdf->Rect(4.5, 15.5, 6, 0.5);
$this->fpdf->Rect(10.5, 15.5, 5.5, 0.5);
$this->fpdf->Rect(16, 15.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 16, 1, 0.5);
$this->fpdf->Rect(4.5, 16, 6, 0.5);
$this->fpdf->Rect(10.5, 16, 5.5, 0.5);
$this->fpdf->Rect(16, 16, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 16.5, 1, 0.5);
$this->fpdf->Rect(4.5, 16.5, 6, 0.5);
$this->fpdf->Rect(10.5, 16.5, 5.5, 0.5);
$this->fpdf->Rect(16, 16.5, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 17, 1, 0.5);
$this->fpdf->Rect(4.5, 17, 6, 0.5);
$this->fpdf->Rect(10.5, 17, 5.5, 0.5);
$this->fpdf->Rect(16, 17, 2, 0.5);
$this->fpdf->Ln();
$this->fpdf->Rect(3.5, 17.5, 1, 0.5);
$this->fpdf->Rect(4.5, 17.5, 6, 0.5);
$this->fpdf->Rect(10.5, 17.5, 5.5, 0.5);
$this->fpdf->Rect(16, 17.5, 2, 0.5);

/*End of Main*/
/*Footer*/
$this->fpdf->Ln(0);
$this->fpdf->Cell(0.25, 1, '');
$this->fpdf->Cell(15.5, 1, 'Mengetahui & Menyetujui', 0, 0, 'C');
$this->fpdf->Ln(1.5);
$this->fpdf->Cell(0.25, 0.5, '');
$this->fpdf->Cell(6, 0.5, 'Ketua Laboratorium Kimia', 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, '', 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, 'Pemohon,', 0, 0, 'J');
$this->fpdf->Cell(0.25, 0.5, '');
$this->fpdf->Ln(2);
$this->fpdf->SetFont('Times', 'u', 10);
$this->fpdf->Cell(0.25, 0.5, '');
$this->fpdf->Cell(6, 0.5, 'Dr. Fera Kurniadewi', 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, '', 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, $mahasiswa['nama'], 0, 0, 'J');
$this->fpdf->Cell(0.25, 1, '');
$this->fpdf->Ln(0.5);
$this->fpdf->SetFont('Times', '', 10);
$this->fpdf->Cell(0.25, 0.5, '');
$this->fpdf->Cell(6, 0.5, 'NIP. 197612312001122002', 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, '', 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, 'No. Reg. '.$mahasiswa['noreg'], 0, 0, 'J');
$this->fpdf->Cell(0.25, 0.5, '');

/*End of Footer*/

$this->fpdf->Output('Form Peminjaman Alat.pdf', "I");
?>
