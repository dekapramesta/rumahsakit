<?php

class Model_auth extends CI_Model
{
    public function daftar_user($data, $table)
    {
        $this->db->insert($table, $data);
        return true;
    }
    public function cek_login()
    {
        $username        = set_value('username');
        $password    = set_value('password');

        $this->input->post('username', $username);
        $this->input->post('password', $password);

        $cek  = $this->db->get_where('tb_user', ['username' => $username]);

        if ($cek->num_rows() > 0) {
            $hasil = $cek->row();
            if (password_verify($password, $hasil->password)) {
                if ($cek->row()->status_user == 1) {
                    return $hasil;
                } else {
                    $this->session->set_flashdata('pesan', '<div style="justify-content:center;" class="text-center alert alert-danger alert-dismissible fade show" role="alert">Akun Di Non-Aktifkan</div>');
                    redirect('Login');
                }
            } else {

                return array();
            }
        } else {

            $this->session->set_flashdata('pesan', '<div style="justify-content:center;" class="text-center alert alert-danger alert-dismissible fade show" role="alert">Username tidak ditemukan!</div>');
            redirect('Login');
        }
    }
}
