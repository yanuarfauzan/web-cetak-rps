<div class="container">
    <div class="row">
        <div class="col">
            <form action="<?= base_url('Matkul/do_updateMatkul'); ?>/<?= $id; ?>" method="POST">
                <label for="idProdi" class="form-label">Program Studi</label>
                <select name="idProdi" id="idProdi" class="form-control">
                    <?php $selected_valuePr = $rowMatkul['id_prodi']; ?>
                    <?php foreach($dataProdi as $dp) : ?>
                    <option value="<?= $dp['id_prd']; ?>" <?php if($dp['id_prd'] == $selected_valuePr) echo 'selected' ?>><?= $dp['nama_prodi']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="namaMatkul" class="form-label">Kode Matakuliah</label>
                <input type="text" class="form-control" id="namaMatkul" name="kodeMatkul" value="<?= $rowMatkul['kode_matkul']; ?>">
                <label for="namaMatkul" class="form-label">Nama Matakuliah</label>
                <input type="text" class="form-control" id="namaMatkul" name="namaMatkul" value="<?= $rowMatkul['nama_matkul']; ?>">
                <label for="idDosen" class="form-label">Dosen</label>
                <select name="idDosen" id="idDosen" class="form-control">
                    <?php $selected_value = $rowMatkul['id_dosen']; ?>
                    <?php foreach($dosen as $dsn) : ?>
                        <option value="<?= $dsn['id_dsn']; ?>" <?php if($dsn['id_dsn'] == $selected_value) echo 'selected' ?>><?= $dsn['nama_dosen']; ?></option>
                        <?php endforeach; ?>
                </select>
                <br>
                <a href="<?= base_url('Matkul'); ?>" class="btn btn-danger">
                <i class="fa fa-solid fa-arrow-left"></i>
                Tidak Jadi</a>
                <button class="btn btn-primary">
                <i class="fa fa-solid fa-wrench"></i>    
                Update</button>
        </div>
        </form>
    </div>
</div>
</div>