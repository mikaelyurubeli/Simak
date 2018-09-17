<?php
date_default_timezone_set('Asia/Jakarta');
$this->fpdf->FPDF("P","cm", "A4");

// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
$this->fpdf->SetMargins(2.5,2,1);
/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
di footer, nanti kita akan membuat page number dengan format : number page / total page
*/
$this->fpdf->AliasNbPages();

// AddPage merupakan fungsi untuk membuat halaman baru
$this->fpdf->AddPage();

// Setting Font : String Family, String Style, Font size
$this->fpdf->SetFont('Times','',12);

/*Header*/
$this->fpdf->SetFont('Times','B',14);
$this->fpdf->Cell(17,1,'FORM PENDAFTARAN ASISTEN PRAKTIKUM',0,0,'C');
$this->fpdf->Ln(1);
$this->fpdf->Cell(17,1, 'SEMESTER '.$type_smt.' ('.$semester.') TAHUN AKADEMIK '.$tahun_akademik, 0, 0, 'C');
$this->fpdf->Ln(2);
$this->fpdf->image($mahasiswa['url_foto'], 16.5, 5, 3, 4);
$this->fpdf->Ln(5);
/*End of Header*/

/*Main*/
$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 1, 'NAMA' , 0,'LR', 'L');
$this->fpdf->Cell(1, 1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5, 1,ucwords($mahasiswa['nama']),0,0,'L');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 1, 'NO.REGISTRASI' , 0,'LR', 'L');
$this->fpdf->Cell(1,1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5,1,($mahasiswa['noreg']),0,0,'L');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 1, 'ALAMAT' , 0,'LR', 'L');
$this->fpdf->Cell(1,1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5,1,(ucwords($mahasiswa['alamat'])),0,0,'L');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 1, 'PILIHAN PRAKTIKUM 1' , 0,'LR', 'L');
$this->fpdf->Cell(1,1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5,1,($daftar['pilihan_praktikum1']),0,0,'L');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 1, 'PILIHAN PRAKTIKUM 2' , 0,'LR', 'L');
$this->fpdf->Cell(1,1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5,1,($daftar['pilihan_praktikum2']),0,0,'L');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 1, 'PILIHAN PRAKTIKUM 3' , 0,'LR', 'L');
$this->fpdf->Cell(1,1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5,1,($daftar['pilihan_praktikum3']),0,0,'L');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 0.5, 'NILAI PRAKTIKUM' , 0,'LR', 'L');
$this->fpdf->Cell(1,1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5,1,($daftar['nilai_kimia_organik']),0,0,'L');
$this->fpdf->cell(0, 0.5,'', 0, 1);
$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 0.5, 'KIMIA ORGANIK' , 0,'LR', 'L');

$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 1, 'ANGKATAN/SEMESTER' , 0,'LR', 'L');
$this->fpdf->Cell(1,1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5,1,($mahasiswa['tahun_angkatan'].'/'.$daftar['semester']),0,0,'L');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 1, 'JAM KOSONG' , 0,'LR', 'L');
$this->fpdf->Cell(1,1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5,1,($daftar['jam_kosong']),0,0,'L');
$this->fpdf->Ln();

$this->fpdf->SetFont('Times','B', 12);
$this->fpdf->Cell(5 , 1, 'NO.HP' , 0,'LR', 'L');
$this->fpdf->Cell(1,1,':',0,0,'C');
$this->fpdf->SetFont('Times','', 12);
$this->fpdf->Cell(5,1,($mahasiswa['no_hp']),0,0,'L');
$this->fpdf->Ln();

/*End of Main*/

/*End of Footer*/
$this->fpdf->Output('Form Asisten-'.$mahasiswa['noreg'].'.pdf', "I");

?>
