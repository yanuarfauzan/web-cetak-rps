<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="<?= base_url('Rps/do_updateRps'); ?>/<?= $id; ?>" method="POST">
                    <div class="mb-3">
                    <label for="idDekan">Dekan</label>
                        <select name="idDekan" id="idDekan" class="form-control">
                            <?php $selected_valueFk = $dataRps['id_fakultas']; ?>
                            <?php foreach($fakultas as $fk) : ?>
                                <option value="<?= $fk['id_fk']; ?>" <?php if($fk['id_fk'] == $selected_valueFk) echo 'selected' ?>><?= $fk['nama_dekan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="idProdi">Program Studi</label>
                            <select name="idProdi" id="idProdi" class="form-control">
                                <?php $selected_valuePrd = $dataRps['id_prodi']; ?>
                                <?php foreach($prodi as $prd) : ?>
                                    <option value="<?= $prd['id_prd']; ?>" <?php if($prd['id_prd'] == $selected_valuePrd) echo 'selected' ?>><?= $prd['nama_prodi']; ?></option>
                                    <?php endforeach; ?>
                            </select>
                    <label for="idMatkul">Nama Matakuliah</label>
                        <select name="idMatkul" id="idMatkul" class="form-control">
                            <?php $selected_valueMk = $dataRps['id_matkul'] ?>
                            <?php foreach($matkul as $mk) : ?>
                                <option value="<?= $mk['id_mk']; ?>" <?php if($mk['id_mk'] == $selected_valueMk) echo 'selected'; ?>><?= $mk['nama_matkul']; ?></option>
                                <?php endforeach; ?>
                        </select>
                        <label for="idDosen">Nama Dosen Pengajar</label>
                        <select name="idDosen" id="idDosen" class="form-control">
                            <?php $selected_valueDosen = $dataRps['id_dosen'];?>
                            <?php foreach($dosen as $dsn) : ?>
                                <option value="<?= $dsn['id_dsn']; ?>" <?php if ($dsn['id_dsn'] == $selected_valueDosen) echo 'selected'; ?>><?= $dsn['nama_dosen']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <label for="nomorRps">Nomor Rps</label>
                            <input type="text" class="form-control" id="nomorRps" name="nomorRps" value="<?= $dataRps['nomor_rps']; ?>">
                            <label for="tglBerlaku">Tgl Berlaku</label>
                            <input type="date" class="form-control" id="tglBerlaku" name="tglBerlaku" value="<?= $dataRps['tgl_berlaku']; ?>">
                            <label for="tglDisusun">Tgl Disusun</label>
                            <input type="date" class="form-control" id="tglDisusun" name="tglDisusun" value="tgl_disusun">
                            <label for="revisi">Revisi</label>
                            <input type="text" class="form-control" id="revisi" name="revisi" value="<?= $dataRps['revisi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="identitas" class="form-label">Identitas</label>
                        <textarea type="text" class="form-control" id="identitas" name="identitas">
                       <?= $dataRps['identitas']; ?>

                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambaranUmum" class="form-label">Gambaran Umum</label>
                        <textarea type="text" class="form-control" id="gambaranUmum" name="gambaranUmum">
                        <?= $dataRps['gambaran_umum']; ?>        
                    </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="capaianPem" class="form-label">Capaian Pembelajaran</label>
                        <textarea type="text" class="form-control" id="capaianPem" name="capaianPem">
                        <?= $dataRps['capaian_pem']; ?>
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="prasyaratPeng" class="form-label">Prasyarat dan Pengetahuan</label>
                        <textarea type="text" class="form-control" id="prasyaratPeng" name="prasyaratPeng">
                        <?= $dataRps['prasyarat_pengetahuan']; ?>
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="unitPem" class="form-label">Unit Pembelajaran secara Spesifik</label>
                        <textarea type="text" class="form-control" id="unitPem" name="unitPem">
                        <?= $dataRps['unit_pem']; ?>
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tugasPen" class="form-label">Tugas/Aktivitas dan Penilaian</label>
                        <textarea type="text" class="form-control" id="tugasPen" name="tugasPen">
                        <?= $dataRps['tugas_penilaian']; ?>
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="referensi" class="form-label">Referensi</label>
                        <textarea type="textarea" class="form-control" id="referensi" name="referensi">
                        <?= $dataRps['referensi']; ?>
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="rencanaPem" class="form-label">Rencana Pelaksanaan Pembelajaran</label>
                        <textarea type="text" class="form-control" id="rencanaPem" name="rencanaPem">
                        <?= $dataRps['rencana_pem']; ?>
                        </textarea>
                    </div>
                    <a href="<?= base_url('Rps'); ?>" type="submit" class="btn btn-danger">
                    <i class="fa fa-solid fa-arrow-left"></i>    
                    Tidak Jadi</a>
                    <button type="submit" class="btn btn-primary">
                    <i class="fa fa-solid fa-wrench"></i>    
                    Update</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.config.allowedContent = true;
                        CKEDITOR.replace( 'identitas' );
                        CKEDITOR.replace( 'unitPem' );
                        CKEDITOR.replace( 'tugasPen' );
                        CKEDITOR.replace( 'rencanaPem' );
                </script>

</body>

</html>