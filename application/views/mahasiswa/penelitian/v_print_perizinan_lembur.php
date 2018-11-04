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
$this->fpdf->Cell(15.5,1,'Jakarta, '.$data_penelitian['tgl_buat_surat'],0,0,'R');
$this->fpdf->Ln(1);
$this->fpdf->Cell(2, 0.5, 'Hal', 0, 'L');$this->fpdf->Cell(0.5, 0.5, ':', 0, 'C');$this->fpdf->MultiCell(5, 0.5, 'Permohonan Izin Penggunaan Lab. Penelitian Diluar Hari/Jam Kerja', 0, 'L');
$this->fpdf->Ln(0);
$this->fpdf->Cell(2, 0.5, 'Lampiran', 0, 'L');$this->fpdf->Cell(0.5, 0.5, ':', 0, 'C');$this->fpdf->MultiCell(5, 0.5, '... Lbr', 0, 'L');
$this->fpdf->Ln(1);
/*End of Header*/

/*Main*/
$this->fpdf->Cell(5 , 0.5, 'Kepada Yth :' , 0, 0, 'L');
$this->fpdf->Ln();
$this->fpdf->Cell(5 , 0.5, 'Kepala Laboratorium Kimia FMIPA' , 0, 0, 'L');
$this->fpdf->Ln();
$this->fpdf->Cell(5 , 0.5, 'Universitas Negeri Jakarta' , 0, 0, 'L');
$this->fpdf->Ln();
$this->fpdf->Cell(5 , 0.5, 'Di Jakarta' , 0, 0, 'L');
$this->fpdf->Ln(1);

$this->fpdf->Cell(5 , 0.5, 'Dengan Hormat,' , 0, 0, 'L');
$this->fpdf->Ln();
$this->fpdf->Cell(5 , 0.5, 'Yang bertanda tangan dibawah ini :' , 0, 0, 'L');
$this->fpdf->Ln(1);

$this->fpdf->Cell(1 , 0.5, '');
$this->fpdf->Cell(3.5 , 0.5, 'Nama');
$this->fpdf->Cell(0.5 , 0.5, ':');
$this->fpdf->Cell(10.5,0.5,$data_penelitian['nama'],0,0,'L');
$this->fpdf->Ln();

$this->fpdf->Cell(1 , 0.5, '');
$this->fpdf->Cell(3.5 , 0.5, 'No.Registrasi');
$this->fpdf->Cell(0.5 , 0.5, ':');
$this->fpdf->Cell(10.5,0.5,$data_penelitian['noreg'],0,0,'L');
$this->fpdf->Ln();

$this->fpdf->Cell(1 , 0.5, '');
$this->fpdf->Cell(3.5 , 0.5, 'Judul Penelitian');
$this->fpdf->Cell(0.5 , 0.5, ':');
$this->fpdf->MultiCell(10.5,0.5,$data_penelitian['judul_penelitian'],0,'L');
$this->fpdf->Ln();


$this->fpdf->MultiCell(15.5,0.5,'Dengan ini saya mengajukan permohonan kepada ibu, kiranya ibu berkenan mengizinkan saya  melakukan kegiatan penelitian diluar hari/Jam kerja di Laboratorium Penelitian. Kegiatan tersebut akan dilaksanakan pada :',0,'J');
$this->fpdf->Ln(0.4);
$this->fpdf->Cell(1 , 0.5, ''); 
$this->fpdf->Cell(3.5 , 0.5, 'Hari / Tgl');
$this->fpdf->Cell(0.5 , 0.5, ':');
$this->fpdf->Cell(10.5,0.5,$data_penelitian['tgl_penelitian'],0,0,'L');
$this->fpdf->Ln();
$this->fpdf->Cell(1 , 0.5, '');
$this->fpdf->Cell(3.5 , 0.5, 'Terhitung Mulai Jam ');
$this->fpdf->Cell(0.5 , 0.5, ':');
$this->fpdf->Cell(10.5,0.5,$data_penelitian['jam_mulai'],0,0,'L');
$this->fpdf->Ln();
$this->fpdf->Cell(1 , 0.5, '');
$this->fpdf->Cell(3.5 , 0.5, 'Sampai Jam');
$this->fpdf->Cell(0.5 , 0.5, ':');
$this->fpdf->Cell(10.5,0.5,$data_penelitian['jam_selesai'],0,0,'L');
$this->fpdf->Ln(1);
$this->fpdf->MultiCell(15.5,0.5,'Dengan ini saya berjanji akan mematuhi segala ketentuan yang berlaku di Lab. Penelitian. Dan saya bersedia menerima sangsi apapun atas kecerobohan/kelalaian yang saya lakukan.',0,'J');
$this->fpdf->Ln(0.2);
$this->fpdf->MultiCell(15.5,0.5,'Demikian permohonan ini saya sampaikan, semoga Ibu memakluminya. Atas perhatian, bantuan dan kebijaksanaan Ibu, saya ucapkan terima kasih.',0,'J');

$this->fpdf->Ln();
$this->fpdf->Cell(0.25, 1, '');
$this->fpdf->Cell(15.5, 1, 'Mengetahui & Menyetujui', 0, 0, 'C');
$this->fpdf->Ln(1.5);
$this->fpdf->Cell(0.25, 0.5, '');
$this->fpdf->Cell(6, 0.5, 'Pembimbing I/II', 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, 'Orang Tua/Wali', 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, 'Pemohon,', 0, 0, 'J');
$this->fpdf->Cell(0.25, 0.5, '');
$this->fpdf->Ln(2);
$this->fpdf->SetFont('Times', 'u', 10);
$this->fpdf->Cell(0.25, 0.5, '');
$this->fpdf->Cell(6, 0.5, $data_penelitian['pembimbing_1'], 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, $data_penelitian['orang_tua'], 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, $data_penelitian['nama'], 0, 0, 'J');
$this->fpdf->Cell(0.25, 1, '');
$this->fpdf->Ln(0.5);
$this->fpdf->SetFont('Times', '', 10);
$this->fpdf->Cell(0.25, 0.5, '');
$this->fpdf->Cell(6, 0.5, 'NIP.'.$a['nip'], 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, '', 0, 0, 'J');
$this->fpdf->Cell(6, 0.5, 'No. Reg.'.$data_penelitian['noreg'], 0, 0, 'J');
$this->fpdf->Cell(0.25, 0.5, '');

$this->fpdf->SetFont('Times', 'bu', 10);
//$this->fpdf->Rect(8.3, 23, 7, 3);
$this->fpdf->Ln(1);
$this->fpdf->Cell(16.5, 1, 'Tanda Persetujuan Kepala Lab. Kimia', 0, 0, 'C');
$this->fpdf->Ln(2);
$this->fpdf->Cell(16.5, 0.5, 'Dr. Fera Kurniadewi', 0, 0, 'C');
$this->fpdf->Ln();
$this->fpdf->SetFont('Times', 'b', 10);
$this->fpdf->Cell(16.5, 0.5, 'NIP. 197612312001122002', 0, 1, 'C');
$this->fpdf->Ln();
/*End of Main*/

/*End of Footer*/
$this->fpdf->Output('Surat Izin Lembur-'.$data_penelitian['noreg'].'.pdf', "I");
?>
