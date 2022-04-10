<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataKunjungan extends CI_Controller
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
        $data['Rekam'] = $this->Model_admin->getRekamMedis()->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('datakunjungan', $data);
        $this->load->view('templates/footer');
    }
    public function TambahKunjungan()
    {
        $data['notifikasi'] = $this->db->get_where('tb_notifikasi', array('status_notif' => 0))->result_array();

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
    public function TambahScan()
    {
        $config['upload_path'] = './assets/scan';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('file_scan')) {
            $file_scan = $this->upload->data('file_name');
            $data = array(
                'id_rm' => $this->input->post('id_rm'),
                'nama_file' => $file_scan,
            );
            $this->Model_admin->Tambah_data($data, 'tb_file');
            redirect('DataKunjungan');
        } else {
            $linkinto = base_url() . 'DataKunjungan';
            echo "<script>
				alert('Scan Gagal Upload');
				window.location.href = '" . $linkinto . "';// your redirect path here
				</script>";
        }
    }
}
