<?php
Class Laporankk extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'DESA MULOYAGUNG',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'DAFTAR KK',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(40,6,'NO KK',1,0);
        $pdf->Cell(60,6,'KEPALA KELUARGA',1,0);
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','',10);

        $warga = $this->db->get('tbl_kk')->result();
        foreach ($warga as $row){
            $pdf->Cell(40,6,$row->no_kk,1,0);
            $pdf->Cell(60,6,$row->nama_kepala,1,0);
            $pdf->Cell(10,7,'',0,1);
        }

        $pdf->Output();
    }
}