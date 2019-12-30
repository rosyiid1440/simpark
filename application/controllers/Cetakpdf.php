<?php
class Cetakpdf extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_booking');
        $this->load->library('pdf');
    }
 
    public function pdf($id)
    {
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->setPrintFooter(false);
        $pdf->setPrintHeader(false);
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->AddPage('');
        $pdf->Write(0, 'SIMPARK'.$id, '', 0, 'L', true, 0, false, false, 0);
        $pdf->SetFont('');

        $hasil = $this->M_booking->getbyidusersolo($id);
 
        $tabel = '
        <table border="1">
              <tr>
                    <th> <b>Nama Pemarkir :</b> </th>
                    <th> '.$hasil['nama_pemarkir'].'</th>
              </tr>
              <tr>
                    <th> <b>Alamat :</b> </th>
                    <th> '.$hasil['alamat'].'</th>
              </tr>
              <tr>
                    <th> <b>Nopol :</b> </th>
                    <th> '.$hasil['nopol'].'</th>
              </tr>
              <tr>
                    <th> <b>Tanggal :</b> </th>
                    <th> '.$hasil['tanggal'].'</th>
              </tr>
              <tr>
                    <th> <b>Status :</b> </th>
                    <th> '.$hasil['status'].'</th>
              </tr>
        </table>
        ';
        $pdf->writeHTML($tabel);
        $pdf->Output('file-pdf-codeigniter.pdf', 'I');
    }
 
}