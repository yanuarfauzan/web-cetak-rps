<?php 

class Fakultas_model extends Ci_Model{
    public function getAllFakultas(){
        return $this->db->get('tb_fakultas')->result_array();
        
    }
    public function getFakultasById($id){
        return $this->db->get_where('tb_fakultas', ['id_fk' => $id])->row_array();
    }
}

?>