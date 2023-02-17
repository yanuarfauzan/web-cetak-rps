<?php

class Auth_model extends Ci_Model
{
    public function query_validasi_email($email)
    {
        return $this->db->query("SELECT * FROM tb_user WHERE user_email='$email'")->row_array();
    }
    public function query_validasi_ps($email, $password)
    {
        return $this->db->query("SELECT * FROM tb_user WHERE email='$email' AND user_password=SHA2('$password', 224 )");
    }
    
    public function get_user($userEmail, $password){
        $this->db->where('user_email', $userEmail);
        $this->db->where('user_password', $password);
        return $this->db->get('tb_user')->row_array();

    }
}
