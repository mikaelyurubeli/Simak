<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function _print_pdf($file, $data) {
	require_once('h2p/html2fpdf.php');          // agar dapat menggunakan fungsi-fungsi html2pdf
	ob_start();                            		// memulai buffer
	error_reporting(1);                     	// turn off warning for deprecated functions
	$pdf= new HTML2FPDF();                  	// membuat objek HTML2PDF
	$pdf->DisplayPreferences('Fullscreen');

	$html = $data;               		// mengambil data dengan format html, dan disimpan di variabel
	ob_end_clean();                         	// mengakhiri buffer dan tidak menampilkan data dalam format html
	$pdf->addPage();                        	// menambah halaman di file pdf
	$pdf->WriteHTML($html);                 	// menuliskan data dengan format html ke file pdf
	return $pdf->Output($file,'D');
}
