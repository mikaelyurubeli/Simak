<?php
date_default_timezone_set('Asia/Jakarta');

$this->fpdf->FPDF("L","cm",array(21.5, 33));

// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
$this->fpdf->SetMargins(1,1,1);
/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
di footer, nanti kita akan membuat page number dengan format : number page / total page
*/
$this->fpdf->AliasNbPages();

// AddPage merupakan fungsi untuk membuat halaman baru
$this->fpdf->AddPage();

// Setting Font : String Family, String Style, Font size
$this->fpdf->SetFont('Times','',12);

/*Header*/

$this->fpdf->Image($mahasiswa['url_foto'], 28.3, 1.5, 3, 4);
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(33,1,'PRAKTIKUM '.strtoupper($praktikum['nama_praktikum']),0,0,'C');
$this->fpdf->Ln(1.5);
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->cell(1);
$this->fpdf->Cell(5,0.6,'NAMA',0,0,'L');
$this->fpdf->Cell(1,0.6,':',0,0,'L');
$this->fpdf->Cell(9,0.6,ucwords($mahasiswa['nama']),0,0,'L');
$this->fpdf->Cell(3,0.6,'DOSEN',0,0,'L');
$this->fpdf->Cell(1,0.6,':',0,0,'L');
$this->fpdf->Cell(9,0.6,$praktikum['dosen'],0,0,'L');
$this->fpdf->Ln();
$this->fpdf->cell(1);
$this->fpdf->Cell(5,0.6,'NO.REGISTRASI',0,0,'L');
$this->fpdf->Cell(1,0.6,':',0,0,'L');
$this->fpdf->Cell(9,0.6,$mahasiswa['noreg'],0,0,'L');
$this->fpdf->Cell(3,0.6,'ASISTEN',0,0,'L');
$this->fpdf->Cell(1,0.6,':',0,0,'L');
$this->fpdf->Ln();
$this->fpdf->cell(1);
$this->fpdf->Cell(5,0.6,'PROGRAM STUDI',0,0,'L');
$this->fpdf->Cell(1,0.6,':',0,0,'L');
$this->fpdf->Cell(9,0.6,ucwords($mahasiswa['program_studi']),0,0,'L');
$this->fpdf->Ln();
$this->fpdf->cell(1);
$this->fpdf->Cell(5,0.6,'ALAMAT',0,0,'L');
$this->fpdf->Cell(1,0.6,':',0,0,'L');
$this->fpdf->Cell(9,0.6,ucwords($mahasiswa['alamat']),0,0,'L');
$this->fpdf->Ln();
$this->fpdf->cell(1);
$this->fpdf->Cell(5,0.6,'NO.HP',0,0,'L');
$this->fpdf->Cell(1,0.6,':',0,0,'L');
$this->fpdf->Cell(9,0.6,$mahasiswa['no_hp'],0,0,'L');
$this->fpdf->Ln(1.5);

/*End of Header*/

/*Main*/
//tabel penilaian row 1
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(1.5 , 1.5, 'NO' , 1,'LR', 'C');
$this->fpdf->Cell(5 , 1.5, 'PENILAIAN' , 1, 'LR', 'C');
$this->fpdf->Cell(22 , 0.75, 'PRAKTIKUM' , 1, 'LR', 'C');
$this->fpdf->cell(0, 0.75,'', 0, 1);

//tabel penilaian row 2
$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(1.5 , 1.5, '' , 0, 'LR', 'C');
$this->fpdf->Cell(5 , 1.5, '' , 0, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '1' , 1, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '2' , 1, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '3' , 1, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '4' , 1, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '5' , 1, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '6' , 1, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '7' , 1, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '8' , 1, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '9' , 1, 'LR', 'C');
$this->fpdf->Cell(2.2 , 0.75, '10' , 1, 'LR', 'C');
$this->fpdf->cell(0, 0.75,'', 0, 1);

//tabel penilaian row isi
$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(1.5 , 1, 'I' , 1,'LR', 'C');
$this->fpdf->Cell(5 , 1, 'Aktivitas Harian (20%)' , 1, 'LR', 'L');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(1.5 , 1, 'II' , 1,'LR', 'C');
$this->fpdf->Cell(5 , 1, 'Laporan (25%)' , 1, 'LR', 'L');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(1.5 , 1, 'III' , 1,'LR', 'C');
$this->fpdf->Cell(5 , 1, 'Tes Tertulis/Lisan (15%)' , 1, 'LR', 'L');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','',12);
$this->fpdf->Cell(1.5 , 1, 'IV' , 1,'LR', 'C');
$this->fpdf->Cell(5 , 1, 'Keterampilan (40%)' , 1, 'LR', 'L');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B',12);
$this->fpdf->Cell(6.5 , 1, 'Nilai (100%)' , 1,'LR', 'C');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Cell(2.2 , 1, '' , 1, 'LR');
$this->fpdf->Ln(1.5);
/*End of Main*/

/* Footer*/

$this->fpdf->SetFont('Times', 'B', 12);
$this->fpdf->cell(0.5, 0.5);$this->fpdf->cell(4, 0.5, 'Keterangan :');
$this->fpdf->Ln();
$this->fpdf->SetFont('Times', '', 12);
$this->fpdf->cell(0.5, 0.5);$this->fpdf->cell(18, 0.5, 'Aspek yang dinilai :'); $this->fpdf->cell(4, 0.5, 'III.  Tes Tertulis/Lisan : Pre Test');
$this->fpdf->Ln();
$this->fpdf->cell(4, 0.5, 'I.  Aktivitas Harian');
$this->fpdf->Ln();
$this->fpdf->cell(0.5, 0.5);
$this->fpdf->cell(18, 0.5, 'a. Kesiapan Kerja'); $this->fpdf->cell(4, 0.5, 'IV.  Keterampilan');
$this->fpdf->Ln();
$this->fpdf->cell(0.5, 0.5);
$this->fpdf->cell(18.6, 0.5, 'b. Disiplin Kerja'); $this->fpdf->cell(4, 0.5, 'a. Kecakapan/Skill');
$this->fpdf->Ln();
$this->fpdf->cell(0.5, 0.5);
$this->fpdf->cell(18.6, 0.5, 'c. Kerjasama'); $this->fpdf->cell(4, 0.5, 'b. Ketelitian');
$this->fpdf->Ln();$this->fpdf->cell(19.1, 0.5); $this->fpdf->cell(4, 0.5, 'c. Hasil Kerja');
$this->fpdf->Ln();
$this->fpdf->cell(4, 0.5, 'II.  Laporan');
$this->fpdf->Ln();
$this->fpdf->cell(0.5, 0.5);
$this->fpdf->cell(16, 0.5, 'a. Sistematika Laporan'); $this->fpdf->cell(10, 0.5, 'Nilai Praktikum = Total Nilai / Jumlah Praktikum');
$this->fpdf->Ln();
$this->fpdf->cell(0.5, 0.5);
$this->fpdf->cell(16, 0.5, 'b. Isi dan Analisis Hasil'); $this->fpdf->cell(10, 0.5, 'Nilai Akhir Praktikum = 60% Nilai Praktikum + 40% Nilai Ujian Praktikum');
$this->fpdf->Ln();
$this->fpdf->cell(0.5, 0.5);
$this->fpdf->cell(4, 0.5, 'c. Penggunaan Bahasa');
$this->fpdf->Ln();

/*End of Footer*/
$this->fpdf->Output($mahasiswa['noreg'].'-'.$praktikum['nama_praktikum'].'.pdf', "I");

?>
