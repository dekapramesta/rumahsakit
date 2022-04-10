<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanRetensi extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if ($this->session->userdata('level') == null) {
            redirect("");
        }
        notifikasi_retensi();
        status_retensi();
        date_default_timezone_set('Asia/Jakarta');
    }


    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index()
    {
        $data['notifikasi'] = $this->db->get_where('tb_notifikasi', array('status_notif' => 0))->result_array();
        $data['rekam_aktif'] = $this->Model_admin->getRetensi(1)->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('laporanretensi_aktif', $data);
        $this->load->view('templates/footer');
    }
    public function TidakAktif()
    {
        $data['notifikasi'] = $this->db->get_where('tb_notifikasi', array('status_notif' => 0))->result_array();
        $data['rekam_aktif'] = $this->Model_admin->getRetensi(0)->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('laporanretensi_non');
        $this->load->view('templates/footer');
    }
    public function CetakPdf($status)
    {

        if ($status == 0) {
            $this->data['retensi'] = array_chunk($this->Model_admin->getRetensi(0)->result_array(), 10);
            $this->data['title_pdf'] = 'Laporan Retensi Rekam Medis Tidak Aktif ';
        } elseif ($status == 1) {
            $this->data['retensi'] = array_chunk($this->Model_admin->getRetensi(1)->result_array(), 10);
            $this->data['title_pdf'] = 'Laporan Retensi Rekam Medis Aktif ';
        }

        $this->load->library('pdfgenerator');

        // title dari pdf


        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_penjualan_toko_kita';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";

        $html = $this->load->view('laporan_pdf', $this->data, true);

        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
