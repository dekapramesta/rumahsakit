<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



if (!function_exists('check_retensi')) {

    function check_retensi()

    {
        $CI    = &get_instance();
        $CI->load->database();
        $data_all = $CI->Model_admin->getDateChecking()->result_array();
        $data_primary = $CI->Model_admin->getpasien()->result_array();

        foreach ($data_primary as $dt) {
            foreach ($data_all as $dc) {
                if ($dt['id_pasien'] == $dc['id_pasien']) {
                    $tgl_neh = $dc['tgl_periksa'];
                }
            }
            $tgl_awal = $dt['tgl_periksa'];
            $tgl_akhir = $tgl_neh;
            $date1 = $dt['tgl_periksa'];
            $date2 = $tgl_neh;

            $diff = abs(strtotime($date2) - strtotime($date1));

            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        }

        // echo $years;
    }
}
if (!function_exists('status_retensi')) {

    function status_retensi()

    {
        date_default_timezone_set('Asia/Jakarta');
        $CI    = &get_instance();
        $CI->load->database();
        $data_primary = $CI->Model_admin->getRekamMedis()->result_array();
        foreach ($data_primary as $dt) {


            $date1 = $dt['tgl_periksa'];
            $date2 = date('Y-m-d');

            $diff = abs(strtotime($date2) - strtotime($date1));

            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
            if ($years >= 5) {
                $where = array('id_rm' => $dt['id_rm']);
                $data_update = array('status_rm' => 0);
                $CI->Model_admin->edit_data($where, $data_update, 'tb_rekammedis');
            }
        }

        // echo $years;
    }
}
if (!function_exists('hitung_hari')) {

    function hitung_hari($hari)

    {
        date_default_timezone_set('Asia/Jakarta');



        $date1 = $hari;
        $date2 = date('Y-m-d');

        $diff = abs(strtotime($date2) - strtotime($date1));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

        return $years . " Tahun, " . $months . " Bulan, " . $days . " Hari";
    }
}
if (!function_exists('notifikasi_retensi')) {

    function notifikasi_retensi()

    {
        date_default_timezone_set('Asia/Jakarta');
        $CI    = &get_instance();
        $CI->load->database();
        $data_primary = $CI->Model_admin->getRekamMedis()->result_array();
        foreach ($data_primary as $dt) {


            $date1 = $dt['tgl_periksa'];
            $date2 = date('Y-m-d');

            $diff = abs(strtotime($date2) - strtotime($date1));

            $years = floor($diff / (365 * 60 * 60 * 24));
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
            // echo "id = " . $dt['id_rm'] . "-" . $years . "-" . $months . '-' . $days . '</br>';
            if (($years == 4) && ($months == 11) && (29 > $days) && (20 < $days)) {
                $cek_data = $CI->db->get_where('tb_notifikasi', array('id_rekammedis' => $dt['id_rm']))->row();
                if ($cek_data == null) {
                    $data_array = array(
                        'id_rekammedis' => $dt['id_rm'],
                        'Notif' => 'Rekam Medis Dengan Id ' . $dt['id_rm'] . ", Akan Diretensi",
                        'status_notif' => 0
                    );
                    $CI->Model_admin->tambah_data($data_array, 'tb_notifikasi');
                }
            }

            // echo $years;
        }
    }
}
