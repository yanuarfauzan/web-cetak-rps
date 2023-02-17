
<div class="container">
    <div class="row">
        <div class="col">
            <form action="<?= base_url('Matkul/do_tambahMatkul'); ?>" method="POST">
                <label for="idProdi" class="form-label">Program Studi</label>
                <select name="idProdi" id="idProdi" class="form-control">
                    <option value="">Pilih Program Studi</option>
                    <?php foreach($dataProdi as $dp) : ?>
                        <option value="<?= $dp['id_prd']; ?>"><?= $dp['nama_prodi']; ?></option>
                    <?php endforeach; ?>
                </select>
                <?= form_error('program studi', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <label for="namaMatkul" class="form-label">Kode Matakuliah</label>
                <input type="text" class="form-control" id="namaMatkul" name="kodeMatkul">
                <?= form_error('kodeMatkul', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <label for="namaMatkul" class="form-label">Nama Matakuliah</label>
                <input type="text" class="form-control" id="namaMatkul" name="namaMatkul">
                <?= form_error('namaMatkul', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <label for="idDosen" class="form-label">Nama Pengajar</label>
                <select name="idDosen" id="idDosen" class="form-control" aria-label="Default select example">
                    <option value="1">Pilih Dosen Pengajar</option>
                    <?php foreach ($dosen as $dsn) : ?>
                        <option value="<?= $dsn['id_dsn']; ?>"><?= $dsn['nama_dosen']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('idDosen', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <a href="<?= base_url('Matkul'); ?>" class="btn btn-danger">
                <i class="fa fa-solid fa-arrow-left"></i>
                Tidak Jadi</a>
                <button class="btn btn-primary">
                <i class="fa fa-solid fa-plus"></i>    
                Tambahkan</button>
        </div>
        </form>
    </div>
</div>
</div>