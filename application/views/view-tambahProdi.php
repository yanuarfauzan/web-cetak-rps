<!-- <?php var_dump($dekan); ?> -->
<div class="container">
    <div class="row">
        <div class="col">
            <form action="<?= base_url('Prodi/do_tambahProdi'); ?>" method="POST">
                <label for="idDekan" class="form-label">Fakultas</label>
                <select name="idDekan" id="idDekan" class="form-control" >
                    <option value="">Pilih Fakultas</option>
                    <?php foreach($dekan as $dkn) : ?>
                        <option value="<?= $dkn['id_fk']; ?>"><?= $dkn['nama_fakultas']; ?></option>
                        <?php endforeach; ?>
                </select>
                <?= form_error('idDekan', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <label for="namaProdi" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="namaProdi" name="namaProdi">
                <?= form_error('namaProdi', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <label for="namaKaprodi" class="form-label">Nama Kaprodi</label>
                <input type="text" class="form-control" id="namaKaprodi" name="namaKaprodi">
                <?= form_error('namaKaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <label for="namaSekprodi" class="form-label">Nama Sekprodi</label>
                <input type="text" class="form-control" id="namaSekprodi" name="namaSekprodi">
                <?= form_error('namaSekprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <br>
                <a href="<?= base_url('Prodi'); ?>" class="btn btn-danger">
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