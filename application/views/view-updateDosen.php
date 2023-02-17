<div class="container">
    <div class="row">
        <div class="col">
            <form action="<?= base_url('Dosen/do_updateDosen'); ?>/<?= $id; ?>" method="POST">
                <label for="nama" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $rowDosen['nama_dosen']; ?>">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenisKelamin" name="jenisKelamin" value="<?= $rowDosen['jenis_kelamin']; ?>">
                <label for="nipDosen" class="form-label">NIP Dosen</label>
                <input type="text" class="form-control" id="nipDosen" name="nipDosen" value="<?= $rowDosen['nip_dosen']; ?>">
                <br>
                <a href="<?= base_url('Dosen'); ?>" class="btn btn-danger">
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