<?php 
    if ($this->session->userdata('login') != TRUE){
            redirect('Auth');
    }
?>

<div class="container">
    <div class="row">
        <div class="col">
        <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
    <div class="card-header bg-primary border-success text-white">Dosen</div>
    <div class="card-body">
        <div class="ms-auto d-flex align-items-center justify-content-end">
    <span class="btn btn-lg btn-info btn-circle d-flex align-items-center justify-content-center">
											<i class="fas fa-solid fa-user"></i>
										</span>
                                        </div>
                                        <h5 class="card-title">Jumlah Dosen</h5>
        <h2><?= $jumlah_dosen; ?></h2>
    </div>
</div>
</div>
<div class="col">
    <div class="card">
        <div class="card-header bg-primary border-success text-white">Jumlah Fakultas</div>
        <div class="card-body">
        <div class="ms-auto d-flex align-items-center justify-content-end">
    <span class="btn btn-lg btn-info btn-circle d-flex align-items-center justify-content-center">
											<i class="fas fa-solid fa-city"></i>
										</span>
                                        </div>
                                        <h5 class="card-title">Jumlah Fakultas</h5>
        <h2><?= $jumlah_fakultas; ?></h2>
    </div>
    </div>
</div>
<div class="col">
    <div class="card">
        <div class="card-header bg-primary border-success text-white">Jumlah Program Studi</div>
        <div class="card-body">

        <div class="ms-auto d-flex align-items-center justify-content-end">
    <span class="btn btn-lg btn-info btn-circle d-flex align-items-center justify-content-center">
											<i class="fas fa-solid fa-book-open"></i>
										</span>
                                        </div>
                                        <h5 class="card-title">Jumlah Program Studi</h5>
        <h2><?= $jumlah_prodi; ?></h2>

        </div>
    </div>
</div>
<div class="col mt-4 ">
    <div class="card">
        <div class="card-header bg-primary border-success text-white">Mata Kuliah</div>
      <div class="card-body">
      <div class="ms-auto d-flex align-items-center justify-content-end">
    <span class="btn btn-lg btn-info btn-circle d-flex align-items-center justify-content-center">
											<i class="fas fa-solid fa-book"></i>
										</span>
                                        </div>
                                        <h5 class="card-title">Jumlah Mata Kuliah</h5>
        <h2><?= $jumlah_matkul; ?></h2>
        </div>
    </div>      
    </div>  
<div class="col mt-4 ">
    <div class="card">
        <div class="card-header bg-primary border-success text-white">RPS</div>
      <div class="card-body">
      <div class="ms-auto d-flex align-items-center justify-content-end">
    <span class="btn btn-lg btn-info btn-circle d-flex align-items-center justify-content-center">
											<i class="fas fa-solid fa-file"></i>
										</span>
                                        </div>
                                        <h5 class="card-title">Jumlah RPS</h5>
        <h2><?= $jumlah_rps; ?></h2>
        </div>
    </div>      
    </div>  


  <!--  -->
</div>
        </div>
    </div>
</div>