<?php 

class Prodi_model extends Ci_Model{
    public function getAllProdi(){
        $this->db->select('*');
        $this->db->from('tb_prodi');
        $this->db->join('tb_fakultas', 'tb_fakultas.id_fk = tb_prodi.id_fakultas', 'left');
        return $this->db->get()->result_array();

    }
}


?>