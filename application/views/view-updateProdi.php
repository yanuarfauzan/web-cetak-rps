<div class="container">
    <div class="row">
        <div class="col">
            <form action="<?= base_url('Prodi/do_updateProdi'); ?>/<?= $id; ?>" method="POST">

                <label for="idFk" class="form-label">Fakultas</label>
                <select name="idFk" id="idFk" class="form-control">
                    <?php $selected_value = $rowProdi['id_fakultas']; ?>
                    <?php foreach($dataFk as $dfk) : ?>
                    <option value="<?= $dfk['id_fk']; ?>"<?php if($dfk['id_fk'] == $selected_value) echo 'selected'; ?>><?= $dfk['nama_fakultas']; ?></option>
                <?php endforeach; ?>
                </select>
                <label for="namaProdi" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="namaProdi" name="namaProdi" value="<?= $rowProdi['nama_prodi']; ?>">
                <label for="namaKaprodi" class="form-label">Nama Kaprodi</label>
                <input type="text" class="form-control" id="namaKaprodi" name="namaKaprodi" value="<?= $rowProdi['nama_kaprodi']; ?>">
                <label for="namaSekprodi" class="form-label">Nama Sekprodi</label>
                <input type="text" class="form-control" id="namaSekprodi" name="namaSekprodi" value="<?= $rowProdi['nama_sekprodi']; ?>">
                <br>
                <a href="<?= base_url('Prodi'); ?>" class="btn btn-danger">
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