<?php
class Dosen_model extends Ci_Model
{
    public function getAllDosen()
    {
        return $this->db->get('tb_dosen')->result_array();
    }
    public function getDosenById($id)
    {
        return $this->db->get_where('tb_dosen', ['id_dsn' => $id])->row_array();
    }
}
