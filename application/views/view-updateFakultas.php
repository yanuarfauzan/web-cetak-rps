<div class="container">
    <div class="row">
        <div class="col">
            <form action="<?= base_url('Fakultas/do_updateFakultas'); ?>/<?= $id; ?>" method="POST">
                <label for="namaFakultas" class="form-label">Nama Fakultas</label>
                <input type="text" class="form-control" id="namaFakultas" name="namaFakultas" value="<?= $dataFk['nama_fakultas']; ?>">
                <label for="namaDekan" class="form-label">Nama Dekan</label>
                <input type="text" class="form-control" id="namaDekan" name="namaDekan" value="<?= $dataFk['nama_dekan']; ?>">
                <br>
                <a href="<?= base_url('Fakultas'); ?>" class="btn btn-danger">
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