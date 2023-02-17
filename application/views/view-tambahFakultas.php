<div class="container">
    <div class="row">
        <div class="col">
            <form action="<?= base_url('Fakultas/do_tambahFakultas'); ?>" method="POST">
                <label for="namaFakultas" class="form-label">Nama Fakultas</label>
                <input type="text" class="form-control" id="namaFakultas" name="namaFakultas">
                <?= form_error('namaFakultas', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <label for="namaDekan" class="form-label">Nama Dekan</label>
                <input type="text" class="form-control" id="namaDekan" name="namaDekan">
                <?= form_error('namaDekan', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <a href="<?= base_url('Fakultas'); ?>" class="btn btn-danger">
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