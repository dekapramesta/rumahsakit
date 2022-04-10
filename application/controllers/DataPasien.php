<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPasien extends CI_Controller
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
        $data['pasien'] = $this->Model_admin->getpasien()->result_array();
        $data['tanggal'] = $this->Model_admin->getDateChecking()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('datapasien', $data);
        $this->load->view('templates/footer');
    }
    public function TambahPasien()
    {
        $data_pasien = array(
            'nomor_identitas' => $this->input->post('no_identitas'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'agama' => $this->input->post('agama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
        );
        $this->Model_admin->tambah_data($data_pasien, 'tb_pasien');
        redirect('DataPasien');
    }
}
