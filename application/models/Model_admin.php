<?php

class Model_admin extends CI_Model
{
    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
        return true;
    }
    public function getPasien()
    {
        $this->db->select('*');
        $this->db->from('tb_pasien');
        $this->db->join('tb_rekammedis', 'tb_rekammedis.id_pasien=tb_pasien.id_pasien', 'left');
        $this->db->join('tb_detail_rm', 'tb_detail_rm.id_rm=tb_rekammedis.id_rm', 'left');
        $this->db->group_by('nomor_identitas');
        return $this->db->get();
    }
    public function getDateChecking()
    {
        $this->db->select('tb_detail_rm.tgl_periksa, tb_pasien.id_pasien, tb_rekammedis.id_rm');
        $this->db->from('tb_pasien');
        $this->db->join('tb_rekammedis', 'tb_rekammedis.id_pasien=tb_pasien.id_pasien', 'left');
        $this->db->join('tb_detail_rm', 'tb_detail_rm.id_rm=tb_rekammedis.id_rm', 'left');
        $this->db->order_by('tgl_periksa', 'asc');
        return $this->db->get();
    }
    public function edit_data($where, $data, $table)
    {
        $this->db->where($where);
        $query = $this->db->update($table, $data);
        return $query;
    }
    public function getRekamMedis()
    {
        $this->db->select('tb_rekammedis.*,tb_pasien.*,tb_detail_rm.*,tb_file.nama_file');
        $this->db->from('tb_rekammedis');
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien=tb_rekammedis.id_pasien', 'left');
        $this->db->join('tb_detail_rm', 'tb_detail_rm.id_rm=tb_rekammedis.id_rm', 'left');
        $this->db->join('tb_file', 'tb_file.id_rm=tb_rekammedis.id_rm', 'left');
        return $this->db->get();
    }
    public function getRetensi($sts)
    {
        $this->db->select('tb_rekammedis.*,tb_pasien.*,tb_detail_rm.*');
        $this->db->from('tb_rekammedis');
        $this->db->join('tb_pasien', 'tb_pasien.id_pasien=tb_rekammedis.id_pasien', 'left');
        $this->db->join('tb_detail_rm', 'tb_detail_rm.id_rm=tb_rekammedis.id_rm', 'left');
        $this->db->where('status_rm =', $sts);
        return $this->db->get();
    }
}
