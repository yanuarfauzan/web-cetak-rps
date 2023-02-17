<?php 

class Dashboard extends Ci_Controller{
public function index()
{
    // Periksa apakah user sudah login atau belum
    if($this->session->userdata('logged') !=TRUE){
        redirect('Auth');
    }

    // Jika sudah login, tampilkan halaman dashboard
    $this->load->view('Home');
}
}
