<?php 

class Fakultas extends Ci_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Fakultas_model', 'Fakultas_model');        
    }
    public function index(){
        $data['title'] = 'WEB RPS | Fakultas';
        $data['fakultas'] = $this->Fakultas_model->getAllFakultas();
        
        $this->load->view('template/header', $data);
        $this->load->view('view-fakultas', $data);
        $this->load->view('template/footer');
    }
    public function tambahFakultas(){
        $data['title'] = 'WEB RPS | Form Tambah Fakultas';
        $this->load->view('template/header', $data);
        $this->load->view('view-tambahFakultas');
        $this->load->view('template/footer');
        
    }
    public function do_tambahFakultas(){
        
        $this->form_validation->set_rules('namaFakultas', 'Nama Fakultas', 'trim|required');
        $this->form_validation->set_rules('namaDekan', 'Nama Dekan', 'trim|required');
        
        if($this->form_validation->run() == false){
            $this->tambahFakultas();
        } else {
            
            $data = [
                'nama_fakultas' => $this->input->post('namaFakultas'),
                'nama_dekan' => $this->input->post('namaDekan')
            ];
            $this->db->insert('tb_fakultas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambah Data Fakultas</div>');
            redirect('Fakultas');
        }
        
    }
    public function updateFakultas($id){
        $data['title'] = 'WEB RPS | Form Update Fakultas';
        $data['id'] = $id;
        $data['dataFk'] = $this->Fakultas_model->getFakultasById($id);
        $this->load->view('template/header', $data);
        $this->load->view('view-updateFakultas', $data);
        $this->load->view('template/footer');
    }
    public function do_updateFakultas($id){
        $data = [
            'nama_fakultas' => $this->input->post('namaFakultas'),
            'nama_dekan' => $this->input->post('namaDekan')
        ];
        $this->db->where('id_fk', $id);
        $this->db->update('tb_fakultas', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengupdate Data Fakultas</div>');
        redirect('Fakultas');
    }
    public function do_deleteFakultas($id){
        $this->db->where('id_fk', $id);
        $this->db->delete('tb_fakultas');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil Menghapus Data Fakultas</div>');

        $this->session->flashdata('message');
        redirect('Fakultas');
    }

}


?>