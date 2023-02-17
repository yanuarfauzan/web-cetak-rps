<div class="container">
    <div class="row">
        <div class="col">
        <form action="" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Data Fakultas.." name="keyword">
                                <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                            </form>
            <a href="<?= base_url('Fakultas/tambahFakultas'); ?>" class="btn btn-primary ml-3 float-right">
            <i class="fa fa-solid fa-plus"></i>
            Tambah Fakultas</a>
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
<?php if(empty($fakultas)) { ?>
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
                    <b class="text-white">List Fakultas</b>
                </div>
                <table class="table">
                    <thead class="table-borderless">
                        <tr>
                            <th class=" text-primary" scope="col">No</th>
                            <th class=" text-primary" scope="col">Nama Fakultas</th>
                            <th class=" text-primary" scope="col">Nama Dekan</th>
                            <th class=" text-primary" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($fakultas as $fk) : ?>
                            <tr>
                                <td class="text-primary"><?= $no++; ?></td>
                                <td class="text-primary"><?= $fk['nama_fakultas']; ?></td>
                                <td class="text-primary"><?= $fk['nama_dekan']; ?></td>
                                <td class="text-primary">
                                    <a href="<?= base_url('Fakultas/updateFakultas'); ?>/<?= $fk['id_fk']; ?>" class="btn btn-warning">
                                    <i class="fa fa-solid fa-pen"></i>    
                                    EDIT
                                    </a>
                                    <a href="<?= base_url('Fakultas/do_deleteFakultas') ?>/<?= $fk['id_fk']; ?>" class="btn btn-danger" onclick="return confirm('yakin?')">
                                    <i class="fa fa-solid fa-trash"></i>    
                                    HAPUS </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>