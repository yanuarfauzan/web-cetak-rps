<?php 

class Prodi_model extends Ci_Model{
    public function getAllProdi(){
        $this->db->select('*');
        $this->db->from('tb_prodi');
        $this->db->join('tb_fakultas', 'tb_fakultas.id_fk = tb_prodi.id_fakultas', 'left');
        return $this->db->get()->result_array();

    }
    public function cariDataProdi(){
        $keyword = $this->input->post('keyword');
        $this->db->like('nama_prodi', $keyword);
        $this->db->or_like('nama_kaprodi', $keyword);
        $this->db->or_like('nama_sekprodi', $keyword);
        $this->db->select('*');
        $this->db->from('tb_prodi');
        $this->db->join('tb_fakultas', 'tb_fakultas.id_fk = tb_prodi.id_fakultas', 'left');
        return $this->db->get()->result_array();
    }
}


?>