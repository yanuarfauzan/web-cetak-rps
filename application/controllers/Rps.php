<?php

class Rps extends Ci_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rps_model', 'Rps_model');
    }

    public function index()
    {
        $data = [
            'dataRps' => $this->Rps_model->getAllDataRps(),
            'title' => 'WEB RPS | RPS'
        ];

        $this->load->view('template/header', $data);
        $this->load->view('view-rps', $data);
        $this->load->view('template/footer');
    }
    public function tambahRps()
    {
        $data['title'] = 'WEB RPS | Form Tambah RPS';
        $data['matkul'] = $this->db->get('tb_matkul')->result_array();
        $data['dosen'] = $this->db->get('tb_dosen')->result_array();
        $data['prodi'] = $this->db->get('tb_prodi')->result_array();
        $data['fakultas'] = $this->db->get('tb_fakultas')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('view-tambahRps', $data);
        $this->load->view('template/footer');
    }
    public function do_tambahRps()
    {
        $this->form_validation->set_rules('idDekan', 'Nama Dekan', 'trim|required');
        $this->form_validation->set_rules('idProdi', 'Program Studi', 'trim|required');
        $this->form_validation->set_rules('idDosen', 'Nama Dosen Pengajar', 'trim|required');
        $this->form_validation->set_rules('idMatkul', 'Mata Kuliah', 'trim|required');
        $this->form_validation->set_rules('nomorRps', 'Nomor Rps', 'trim|required');
        $this->form_validation->set_rules('tglBerlaku', 'Tgl Berlaku', 'trim|required');
        $this->form_validation->set_rules('tglDisusun', 'Tgl Disusun', 'trim|required');
        $this->form_validation->set_rules('revisi', 'Revisi', 'trim|required');
        $this->form_validation->set_rules('identitas', 'Identitas', 'trim|required');
        $this->form_validation->set_rules('gambaranUmum', 'Gambaran Umum', 'trim|required');
        $this->form_validation->set_rules('capaianPem', 'Capaian Pembelajaran', 'trim|required');
        $this->form_validation->set_rules('prasyaratPeng', 'Prasyarat Pengetahuan', 'trim|required');
        $this->form_validation->set_rules('unitPem', 'Unit Pembelajaran Secara Spesifik', 'trim|required');
        $this->form_validation->set_rules('tugasPen', 'Tugas/Aktivitas dan Penilaian', 'trim|required');
        $this->form_validation->set_rules('referensi', 'Referensi', 'trim|required');
        $this->form_validation->set_rules('rencanaPem', 'Rencana Pelaksanaan Pembelajaran', 'trim|required');

        if($this->form_validation->run() == FALSE){
            $this->tambahRps();
        } else {   
            $data['tampilRps'] = $this->Rps_model->insertDataRps();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data Fakultas</div>');
            redirect('Rps');
        }
    }
    public function updateRps($id)
    {
        $data['title'] = 'WEB RPS | Form Update RPS';
        $data['matkul'] = $this->db->get('tb_matkul')->result_array();
        $data['dosen'] = $this->db->get('tb_dosen')->result_array();
        $data['prodi'] = $this->db->get('tb_prodi')->result_array();
        $data['fakultas'] = $this->db->get('tb_fakultas')->result_array();
        $data['dataRps'] = $this->db->get_where('rps', ['id' => $id])->row_array();
        $data['id'] = $id;
        
        $this->load->view('template/header', $data);
        $this->load->view('view-updateRps', $data);
        $this->load->view('template/footer');
        
    }
    public function do_updateRps($id){
        $this->Rps_model->updateDataRps($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Mengupdate Data Fakultas</div>');
        redirect('Rps');
    }
    public function do_deleteRps($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('rps');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil Menghapus Data Fakultas</div>');
        redirect('Rps');
    }
    public function print($id){
        $data['title'] = 'WEB RPS | Cetak RPS';
        $data['dataRps'] = $this->Rps_model->getAllDataRpsbyId($id);
        $this->load->view('cetak_rps', $data);
    }
}
