<?php

class Matkul_model extends Ci_Model
{
    public function getAllMatkul()
    {
        $this->db->select('*');
        $this->db->from('tb_matkul');
        $this->db->join('tb_dosen', 'tb_dosen.id_dsn = tb_matkul.id_dosen', 'left');
        $this->db->join('tb_prodi', 'tb_prodi.id_prd = tb_matkul.id_prodi', 'left');
        return $this->db->get()->result_array();
    }
    public function getMatkulById($id)
    {
        return $this->db->get_where('tb_matkul', ['id_mk' => $id])->row_array();
    }
}
