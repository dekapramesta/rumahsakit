<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataKunjungan extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
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
        $data['Rekam'] = $this->Model_admin->getRekamMedis()->result_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datakunjungan');
        $this->load->view('templates/footer');
    }
    public function TambahKunjungan()
    {
        $data['pasien'] = $this->db->get('tb_pasien')->result_array();
        $data['dokter'] = $this->db->get('tb_dokter')->result_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tambahkunjungan', $data);
        $this->load->view('templates/footer');
    }
    public function TambahData()
    {
        $data_rm = array(
            'id_pasien' => $this->input->post('id_pasien'),
            'id_dokter' => $this->input->post('id_dokter'),
            'status_rm' => 1
        );
        $rm = $this->Model_admin->tambah_data($data_rm, 'tb_rekammedis');
        if ($rm) {
            $id_rm = $this->db->insert_id();
            $detail_rm = array(
                'id_rm' => $id_rm,
                'keluhan' => $this->input->post('keluhan'),
                'diagnosa' => $this->input->post('diagnosa'),
                'tgl_periksa' => date('Y-m-d')
            );
            $this->Model_admin->tambah_data($detail_rm, 'tb_detail_rm');
            redirect('DataKunjungan');
        }
    }
}
