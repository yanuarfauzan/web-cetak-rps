<div class="container">
    <div class="row">
        <div class="col">

            <a href="<?= base_url('Fakultas/tambahFakultas'); ?>" class="btn btn-primary float-right">
            <i class="fa fa-solid fa-plus"></i>
            Tambah Fakultas</a>
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