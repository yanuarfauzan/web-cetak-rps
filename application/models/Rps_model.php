<?php
class Rps_model extends Ci_Model
{

    public function getAllDataRps()
    {
        // return $this->db->query('SELECT * FROM tb_matkul INNER JOIN rps ON rps.id = tb_matkul.id')->result_array();
        $this->db->select('*');
        $this->db->from('rps');
        $this->db->join('tb_matkul', 'tb_matkul.id_mk = rps.id_matkul', 'left');
        return $this->db->get()->result_array();
    }
    public function getAllDataRpsbyId($id)
    {
        $this->db->select('*');
        $this->db->from('rps');
        $this->db->join('tb_matkul', 'tb_matkul.id_mk = rps.id_matkul', 'left');
        $this->db->join('tb_fakultas', 'tb_fakultas.id_fk = rps.id_fakultas', 'left');
        $this->db->join('tb_prodi', 'tb_prodi.id_prd = rps.id_prodi', 'left');
        $this->db->join('tb_dosen', 'tb_dosen.id_dsn = rps.id_dosen', 'left');
        $this->db->where('rps.id', $id);

        return $this->db->get_where()->row_array();
    }
    public function insertDataRps()
    {
        $content = $this->input->post('identitas');
        $data = [
            'id_fakultas' => $this->input->post('idDekan'),
            'id_prodi' => $this->input->post('idProdi'),
            'id_dosen' => $this->input->post('idDosen'),
            'id_matkul' => $this->input->post('idMatkul'),
            'nomor_rps' => $this->input->post('nomorRps'),
            'tgl_berlaku' => $this->input->post('tglBerlaku'),
            'tgl_disusun' => $this->input->post('tglDisusun'),
            'revisi' => $this->input->post('revisi'),
            'identitas' => $content,
            'gambaran_umum' => $this->input->post('gambaranUmum'),
            'capaian_pem' => $this->input->post('capaianPem'),
            'prasyarat_pengetahuan' => $this->input->post('prasyaratPeng'),
            'unit_pem' => $this->input->post('unitPem'),
            'tugas_penilaian' => $this->input->post('tugasPen'),
            'referensi' => $this->input->post('referensi'),
            'rencana_pem' => $this->input->post('rencanaPem')
            
        ];

        $this->db->insert('rps', $data);
    }
    public function getAllDataByid($id)
    {
        return $this->db->get_where('rps', ['id' => $id])->row_array();
    }
    public function updateDataRps($id)
    {
        $data = [
            'id_fakultas' => $this->input->post('idDekan'),
            'id_prodi' => $this->input->post('idProdi'),
            'id_dosen' => $this->input->post('idDosen'),
            'id_matkul' => $this->input->post('idMatkul'),
            'nomor_rps' => $this->input->post('nomorRps'),
            'tgl_berlaku' => $this->input->post('tglBerlaku'),
            'tgl_disusun' => $this->input->post('tglDisusun'),
            'revisi' => $this->input->post('revisi'),
            'identitas' => $this->input->post('identitas'),
            'gambaran_umum' => $this->input->post('gambaranUmum'),
            'capaian_pem' => $this->input->post('capaianPem'),
            'prasyarat_pengetahuan' => $this->input->post('prasyaratPeng'),
            'unit_pem' => $this->input->post('unitPem'),
            'tugas_penilaian' => $this->input->post('tugasPen'),
            'referensi' => $this->input->post('referensi'),
            'rencana_pem' => $this->input->post('rencanaPem'),

        ];
        $this->db->where('id', $id);
        $this->db->update('rps', $data);
    }
    public function cariDataRps(){
        $keyword = $this->input->post('keyword');
        $this->db->like('nomor_rps', $keyword);
        $this->db->or_like('kode_matkul', $keyword);
        $this->db->or_like('nama_matkul', $keyword);
        $this->db->or_like('tgl_disusun', $keyword);
        $this->db->select('*');
        $this->db->from('rps');
        $this->db->join('tb_matkul', 'tb_matkul.id_mk = rps.id_matkul', 'left');
        return $this->db->get()->result_array();
    }
}
