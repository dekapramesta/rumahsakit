<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataPegawai extends CI_Controller
{

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
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('datapegawai');
        $this->load->view('templates/footer');
    }
    public function TambahPegawai()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tambahpegawai');
        $this->load->view('templates/footer');
    }
    public function DaftarPegawai()
    {
        $this->form_validation->set_rules('username', 'username', 'required|is_unique[tb_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|is_unique[tb_pegawai.nama_lengkap]');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');


        $this->form_validation->set_message('required', '{field} tidak boleh kosong!');
        $this->form_validation->set_message('is_unique', '{field} sudah digunakan!');
        $this->form_validation->set_message('matches', '{field} tidak sesuai!');
        if ($this->form_validation->run()) {
            $data_user = array(
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => 1
            );
            $regis_user = $this->Model_auth->daftar_user($data_user, 'tb_user');
            if ($regis_user) {
                $id_user =  $this->db->insert_id();
                $data_profile = array(
                    'id_user' => $id_user,
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'email' => $this->input->post('email'),
                    'no_hp' => $this->input->post('no_hp'),
                    'alamat' => $this->input->post('alamat')
                );
                $this->Model_auth->daftar_user($data_profile, 'tb_pegawai');
                redirect('DataPegawai');
            }
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('tambahpegawai');
            $this->load->view('templates/footer');
        }
    }
}
