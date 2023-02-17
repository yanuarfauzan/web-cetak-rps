<!-- <?php var_dump($matkul); ?> -->
<div class="container">
    <div class="row">
        <div class="col">

            <a href="<?= base_url('Matkul/tambahMatkul'); ?>" class="btn btn-primary float-right">
            <i class="fa fa-solid fa-plus"></i>
            Tambah Matkul</a>
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
                    <b class="text-white">List Matakuliah</b>
                </div>
                <table class="table ">
                    <thead class="table-borderless">
                        <tr>
                            <th class=" text-primary" scope="col">No</th>
                            <th class=" text-primary" scope="col">Program Studi</th>
                            <th class=" text-primary" scope="col">Kode Matakuliah</th>
                            <th class=" text-primary" scope="col">Nama Matakuliah</th>
                            <th class=" text-primary" scope="col">Dosen Pengajar</th>
                            <th class=" text-primary" scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($matkul as $mk) : ?>
                            <tr>
                                <td class="text-primary"><?= $no++; ?></td>
                                <td class="text-primary"><?= $mk['nama_prodi']; ?></td>
                                <td class="text-primary"><?= $mk['kode_matkul']; ?></td>
                                <td class="text-primary"><?= $mk['nama_matkul']; ?></td>
                                <td class="text-primary"><?= $mk['nama_dosen']; ?></td>
                                <td class="text-primary">
                                    <a href="<?= base_url('Matkul/updateMatkul'); ?>/<?= $mk['id_mk']; ?>" class="btn btn-warning">
                                    <i class="fa fa-solid fa-pen"></i> 
                                    EDIT
                                    </a>
                                    <a href="<?= base_url('Matkul/do_deleteMatkul'); ?>/<?= $mk['id_mk']; ?>" class="btn btn-danger" onclick="return confirm('yakin?')">
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