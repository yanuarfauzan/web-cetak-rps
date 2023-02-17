<div class="container">
    <div class="row">
        <div class="col">

            <a href="<?= base_url('Dosen/tambahDosen'); ?>" class="btn btn-primary float-right"><i class="fa fa-solid fa-plus"></i> Tambah Dosen</a>
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
                    <b class="text-white">List Dosen</b>
                </div>
                <table class="table">
                    <thead class="table-borderless">
                        <tr>
                            <th class=" text-primary" scope="col">No</th>
                            <th class=" text-primary" scope="col">Nama</th>
                            <th class=" text-primary" scope="col">NIP</th>
                            <th class=" text-primary" scope="col">Jenis Kelamin</th>
                            <th class=" text-primary" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($dosen as $dsn) : ?>
                            <tr>
                                <td class="text-primary"><?= $no++; ?></td>
                                <td class="text-primary"><?= $dsn['nama_dosen']; ?></td>
                                <td class="text-primary"><?= $dsn['nip_dosen']; ?></td>
                                <td class="text-primary"><?= $dsn['jenis_kelamin']; ?></td>
                                <td class="text-primary">
                                    <a href="<?= base_url('Dosen/updateDosen'); ?>/<?= $dsn['id_dsn']; ?>" class="btn btn-warning">
                                    <i class="fa fa-solid fa-pen"></i>
                                    EDIT
                                </a>
                                <a href="<?= base_url('Dosen/do_deleteDosen') ?>/<?= $dsn['id_dsn']; ?>" class="btn btn-danger" onclick="return confirm('yakin?')">
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