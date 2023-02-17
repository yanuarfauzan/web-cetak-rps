<?php 

class Prodi extends Ci_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Prodi_model', 'Prodi_model');
    }
    public function index(){
        $data['title'] = 'WEB RPS | Program Studi';
        $data['prodi'] = $this->Prodi_model->getAllProdi();
        if($this->input->post('keyword')){
            $data['prodi'] = $this->Prodi_model->cariDataProdi();
        }
        $this->load->view('template/header', $data);
        $this->load->view('view-prodi', $data);
        $this->load->view('template/footer');
    }
    public function tambahProdi(){
        
        $data['title'] = 'WEB RPS | Form Tambah Program Studi';
        $data['dekan'] = $this->db->get('tb_fakultas')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('view-tambahProdi', $data);
        $this->load->view('template/footer');
        
    }
    public function do_tambahProdi(){
        $this->form_validation->set_rules('idDekan', 'Nama Dekan', 'trim|required');
        $this->form_validation->set_rules('namaProdi', 'Program Studi', 'trim|required');
        $this->form_validation->set_rules('namaKaprodi', 'Nama Kaprodi', 'trim|required');
        $this->form_validation->set_rules('namaSekprodi', 'Nama Sekprodi', 'trim|required');
        
        if($this->form_validation->run() == FALSE){
            $this->tambahProdi();
        } else {
            
            $data = [
                'id_fakultas' => $this->input->post('idDekan'),
                'nama_prodi' => $this->input->post('namaProdi'),
                'nama_kaprodi' => $this->input->post('namaKaprodi'),
                'nama_sekprodi' => $this->input->post('namaSekprodi')
            ];
            $this->db->insert('tb_prodi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data Fakultas</div>');
            redirect('Prodi');
        }
    }
    public function updateProdi($id){
        $data['title'] = 'WEB RPS | Form Update Program Studi';
        $data['id'] = $id;
        $data['rowProdi'] = $this->db->get_where('tb_prodi', ['id_prd' => $id])->row_array();
        $data['dataFk'] = $this->db->get('tb_fakultas')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('view-updateProdi', $data);
        $this->load->view('template/footer');
        
    }
    public function do_updateProdi($id){
        $data = [
            'id_fakultas' => $this->input->post('idFk'),
            'nama_prodi' => $this->input->post('namaProdi'),
            'nama_kaprodi' => $this->input->post('namaKaprodi'),
            'nama_sekprodi' => $this->input->post('namaSekprodi')
        ];
        $this->db->where('id_prd', $id);
        $this->db->update('tb_prodi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengupdate Data Fakultas</div>');
        redirect('Prodi');
        
        
    }

    public function do_deleteProdi($id){
        $this->db->where('id_prd', $id);
        $this->db->delete('tb_prodi');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil Menghapus Data Fakultas</div>');
        redirect('Prodi');
    }
    
}


?>