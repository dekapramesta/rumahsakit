<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPegawai extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        if ($this->session->userdata('level') != 2) {
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
        $data['pegawai'] = $this->Model_admin->getPegawai()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('datapegawai');
        $this->load->view('templates/footer');
    }
    public function TambahPegawai()
    {
        $data['notifikasi'] = $this->db->get_where('tb_notifikasi', array('status_notif' => 0))->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('tambahpegawai');
        $this->load->view('templates/footer');
    }
    public function EditPegawai($id)
    {
        $data['notifikasi'] = $this->db->get_where('tb_notifikasi', array('status_notif' => 0))->result_array();
        $data['pegawai'] = $this->Model_admin->getPegawaiById($id)->row();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('editpegawai', $data);
        $this->load->view('templates/footer');
    }
    public function DaftarPegawai()
    {
        $data['notifikasi'] = $this->db->get_where('tb_notifikasi', array('status_notif' => 0))->result_array();

        $this->form_validation->set_rules('username', 'username', 'required|is_unique[tb_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|is_unique[tb_pegawai.nama_lengkap]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');


        $this->form_validation->set_message('required', '{field} tidak boleh kosong!');
        $this->form_validation->set_message('is_unique', '{field} sudah digunakan!');
        $this->form_validation->set_message('matches', '{field} tidak sesuai!');
        if ($this->form_validation->run()) {
            $data_user = array(
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => 1,
                'status_user' => 1
            );
            $regis_user = $this->Model_auth->daftar_user($data_user, 'tb_user');
            if ($regis_user) {
                $id_user =  $this->db->insert_id();
                $data_profile = array(
                    'id_user' => $id_user,
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'email' => $this->input->post('email'),
                    'no_hp' => $this->input->post('no_hp'),
                );
                $this->Model_auth->daftar_user($data_profile, 'tb_pegawai');
                redirect('DataPegawai');
            }
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('tambahpegawai');
            $this->load->view('templates/footer');
        }
    }
    public function UbahPegawai($id)
    {
        # code...
        $id_user = $this->db->get_where('tb_pegawai', array('id_pegawai' => $id))->row()->id_user;

        $data = array(
            'username' => $this->input->post('username'),
            'level' => $this->input->post('level')
        );

        $where = array(
            'id_user' => $id_user
        );

        $first = $this->Model_admin->edit_data($where, $data, 'tb_user');
        if ($first) {
            $data_peg = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
            );

            $where_peg = array(
                'id_pegawai' => $id
            );

            $this->Model_admin->edit_data($where_peg, $data_peg, 'tb_pegawai');
        }

        redirect('DataPegawai');
    }
    public function UbahPassword()
    {
        $data = array(
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),

        );

        $where = array(
            'id_user' => $this->input->post('id_user')
        );

        $this->Model_admin->edit_data($where, $data, 'tb_user');
        redirect('DataPegawai');
    }
    public function GantiStatus($id)
    {
        $data = $this->db->get_where('tb_user', array('id_user' => $id))->row();
        if ($data->status_user == 1) {
            $data = array(
                'status_user' => 0,

            );
        } else {
            $data = array(
                'status_user' => 1,

            );
        }


        $where = array(
            'id_user' => $id
        );

        $this->Model_admin->edit_data($where, $data, 'tb_user');
        redirect('DataPegawai');
    }
}
