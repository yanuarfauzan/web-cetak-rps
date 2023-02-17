<div class="container">
    <div class="row">
        <div class="col">
            <form action="<?= base_url('Dosen/do_tambahDosen'); ?>" method="POST">
                <label for="nama" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="nama" name="nama">
                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenisKelamin" name="jenisKelamin">
                <?= form_error('jenisKelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <label for="nipDosen" class="form-label">NIP Dosen</label>
                <input type="text" class="form-control" id="nipDosen" name="nipDosen">
                <?= form_error('nipDosen', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <a href="<?= base_url('Dosen'); ?>" class="btn btn-danger">
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