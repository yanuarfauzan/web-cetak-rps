
<div class="container">
    <div class="row">
        <div class="col">
        <form action="" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Data Rps.." name="keyword">
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                            </form>
            <a href="<?= base_url('Rps/tambahRps'); ?>" class="btn btn-primary ml-3 float-right">
            <i class="fa fa-solid fa-plus"></i>
            Tambah Rps</a>
</div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
</div>
<?php if(empty($dataRps)) { ?>
    <div class="container">
    <div class="row">
        <div class="col">
                <div class="alert alert-danger" role="alert">
              Data Tidak Ditemukan!
            </div> 
        </div>
    </div>
</div>
<?php } ?>
<div class="container vh-100">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary">
                    <b class="text-white">List RPS</b>
                </div>
                <table class="table ">
                    <thead class="table-borderless">
                        <tr>
                            <th class=" text-primary" scope="col">No</th>
                            <th class=" text-primary" scope="col">Nomor RPS</th>
                            <th class=" text-primary" scope="col">Kode Matakuliah</th>
                            <th class=" text-primary" scope="col">Nama Matakuliah</th>
                            <th class=" text-primary" scope="col">Tanggal Disusun</th>
                            <th class=" text-primary" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($dataRps as $dr) : ?>
                            <tr>
                                <td class="text-primary"><?= $no++; ?></td>
                                <td class="text-primary"><?= $dr['nomor_rps']; ?></td>
                                <td class="text-primary"><?= $dr['kode_matkul']; ?></td>
                                <td class="text-primary"><?= $dr['nama_matkul']; ?></td>
                                <td class="text-primary"><?= $dr['tgl_disusun']; ?></td>
                                <td class="text-primary">
                                    <a href="<?= base_url(); ?>Rps/updateRps/<?= $dr['id']; ?>" class="btn btn-warning">
                                    <i class="fa fa-solid fa-pen"></i>    
                                    EDIT
                                    </a>
                                    <a href="<?= base_url(); ?>Rps/do_deleteRps/<?= $dr['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?')">
                                    <i class="fa fa-solid fa-trash"></i>    
                                    HAPUS </a>
                                    <a href="<?= base_url('Rps/print'); ?>/<?= $dr['id']; ?>" class="btn btn-success">
                                    <i class="fa fa-solid fa-print"></i>    
                                    CETAK </a>
                                        
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>