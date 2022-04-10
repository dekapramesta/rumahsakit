<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
        $data['pegawai'] = $this->db->get('tb_pegawai')->result_array();
        $data['pasien'] = $this->db->get('tb_pasien')->result_array();
        $data['rm_aktif'] = $this->db->get_where('tb_rekammedis', array('status_rm' => 1))->result_array();
        $data['rm_non'] = $this->db->get_where('tb_rekammedis', array('status_rm' => 0))->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
    public function BacaSemua($url)
    {
        $data = array(
            'status_notif' => 1
        );
        $where = array(
            'status_notif' => 0
        );
        $this->db->update('tb_notifikasi', $data, $where);
        redirect($url);
    }
    public function Keluar()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
