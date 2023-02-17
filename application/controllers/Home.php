<?php

class Home extends Ci_Controller
{
    public function index()
    {
        $data['title'] = 'WEB RPS | Dashboard';
        $data['user'] = $this->db->get_where('tb_user', ['user_email' => $this->session->userdata('email')])->row_array();
        $data['jumlah_dosen'] = $this->db->get('tb_dosen')->num_rows();
        $data['jumlah_fakultas'] = $this->db->get('tb_fakultas')->num_rows();
        $data['jumlah_prodi'] = $this->db->get('tb_prodi')->num_rows();
        $data['jumlah_matkul'] = $this->db->get('tb_matkul')->num_rows();
        $data['jumlah_rps'] = $this->db->get('rps')->num_rows();
        $this->load->view('template/header', $data);
        $this->load->view('view-dashboard', $data);
        $this->load->view('template/footer');
    }
}
