<?php

class Dosen extends Ci_Controller
{
    public function __construct()
    { 
        parent::__construct();
        $this->load->model('Dosen_model', 'Dosen_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = [
            'title' => 'WEB RPS | Dosen',
            'dosen' => $this->Dosen_model->getAllDosen()
        ];
        if($this->input->post('keyword')){
            $data['dosen'] = $this->Dosen_model->cariDataDosen();
        }
        $this->load->view('template/header', $data);
        $this->load->view('view-dosen', $data);
        $this->load->view('template/footer');
    }
    public function tambahDosen()
    {
        $data['title'] = 'WEB RPS | Form Tambah Dosen';
        
        $this->load->view('template/header', $data);
        $this->load->view('view-tambahDosen');
        $this->load->view('template/footer');
    }
    public function do_tambahDosen()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('nipDosen', 'Nip Dosen', 'trim|required');
        
        if($this->form_validation->run() == false){
            $this->tambahDosen();
        } else {
            
            $data = [
                'nama_dosen' => $this->input->post('nama'),
                'jenis_kelamin' => $this->input->post('jenisKelamin'),
                'nip_dosen' => $this->input->post('nipDosen'),
            ];
            
            $this->db->insert('tb_dosen', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menginputkan Data Dosen</div>');
            redirect('Dosen');
            
        }
    }
    public function do_deleteDosen($id)
    {
        $this->db->where('id_dsn', $id);
        $this->db->delete('tb_dosen');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil Menghapus Data Dosen</div>');
        $this->session->flashdata('message');
        redirect('Dosen');
    }
    public function updateDosen($id)
    {
        $data['title'] = 'WEB RPS | Form Update Dosen';
        $data['rowDosen'] = $this->Dosen_model->getDosenById($id);
        $data['id'] = $id;
        $this->load->view('template/header', $data);
        $this->load->view('view-updateDosen', $data);
        $this->load->view('template/footer');
    }
    public function do_updateDosen($id)
    {
        $data = [
            'nama_dosen' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenisKelamin'),
            'nip_dosen' => $this->input->post('nipDosen')
        ];
        $this->db->where('id_dsn', $id);
        $this->db->update('tb_dosen', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengupdate Data Dosen</div>');
        redirect('Dosen');
    }
}
