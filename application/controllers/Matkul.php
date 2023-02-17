<?php

class Matkul extends Ci_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Matkul_model', 'Matkul_model');
    }
    public function index()
    {
        $data = [
            'matkul' => $this->Matkul_model->getAllMatkul(),
            'title' => 'WEB RPS | Matakuliah'
        ];
        $this->load->view('template/header', $data);
        $this->load->view('view-matkul', $data);
        $this->load->view('template/footer');
    }
    public function tambahMatkul()
    {
        $data = [
            'dosen' => $this->db->get('tb_dosen')->result_array(),
            'dataProdi' => $this->db->get('tb_prodi')->result_array(),
            'title' => 'WEB RPS | Form Tambah Matakuliah'
        ];
        $this->load->view('template/header', $data);
        $this->load->view('view-tambahMatkul', $data);
        $this->load->view('template/footer');
    }
    public function do_tambahMatkul()
    {
        $this->form_validation->set_rules('idProdi', 'Program Studi', 'trim|required');
        $this->form_validation->set_rules('kodeMatkul', 'Kode Mata Kuliah', 'trim|required');
        $this->form_validation->set_rules('namaMatkul', 'Mata Kuliah', 'trim|required');
        $this->form_validation->set_rules('idDosen', 'Dosen', 'trim|required');

        if($this->form_validation->run() == FALSE){
            $this->tambahMatkul();
        } else {

            $data = [
                'id_prodi' => $this->input->post('idProdi'),
                'kode_matkul' => $this->input->post('kodeMatkul'),
                'nama_matkul' => $this->input->post('namaMatkul'),
                'id_dosen' => $this->input->post('idDosen'),
            ];
            $this->db->insert('tb_matkul', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data Fakultas</div>');
            redirect('Matkul');
        }
    }
    public function updateMatkul($id)
    {
        $data['title'] = 'WEB RPS | Form Update Matakuliah';
        $data['dataProdi'] = $this->db->get('tb_prodi')->result_array();
        $data['dosen'] = $this->db->get('tb_dosen')->result_array();
        $data['rowMatkul'] = $this->db->get_where('tb_matkul', ['id_mk' => $id])->row_array();
        // $data['rowMatkul'] = $this->Matkul_model->getMatkulById($id);
        $data['id'] = $id;
        $this->load->view('template/header', $data);
        $this->load->view('view-updateMatkul', $data);
        $this->load->view('template/footer');
    }
    public function do_updateMatkul($id)
    {
        $data = [
            'id_prodi' => $this->input->post('idProdi'),
            'nama_matkul' => $this->input->post('namaMatkul'),
            'kode_matkul' => $this->input->post('kodeMatkul'),
            'id_dosen' => $this->input->post('idDosen'),
        ];
        
        $this->db->where('id_mk ', $id);
        $this->db->update('tb_matkul', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengupdate Data Fakultas</div>');
        redirect('Matkul');
    }
    public function do_deleteMatkul($id)
    {
        $this->db->where('id_mk', $id);
        $this->db->delete('tb_matkul');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil Menghapus Data Fakultas</div>');
        redirect('Matkul');
    }
}
