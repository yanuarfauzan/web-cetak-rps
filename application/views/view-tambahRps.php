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
                <form action="<?= base_url('Rps/do_tambahRps'); ?>" method="POST">
                    <div class="mb-3">
                        <!-- <label for="nomorRps">Nomor RPS</label>
                        <input type="text" id="nomorRps" class="form-control" name="nomorRps"> -->
                        <label for="idDekan">Dekan</label>
                        <select name="idDekan" id="idDekan" class="form-control">
                            <option value="">Pilih Dekan</option>
                            <?php foreach($fakultas as $fk) : ?>
                                <option value="<?= $fk['id_fk']; ?>"><?= $fk['nama_dekan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('idDekan', '<small class="text-danger pl-3">', '</small>'); ?>
                            <br>
                            <label for="idProdi">Program Studi</label>
                            <select name="idProdi" id="idProdi" class="form-control">
                                <option value="">Pilih Program Studi</option>
                                <?php foreach($prodi as $prd) : ?>
                                    <option value="<?= $prd['id_prd']; ?>"><?= $prd['nama_prodi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('idProdi', '<small class="text-danger pl-3">', '</small>'); ?>
                                <br>
                                <label for="idMatkul">Nama Matakuliah</label>
                                <select name="idMatkul" id="idMatkul" class="form-control">
                                    <option value="">Pilih Matakuliah</option>
                                    <?php foreach($matkul as $mk) : ?>
                                        <option value="<?= $mk['id_mk']; ?>"><?= $mk['nama_matkul']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('idMatkul', '<small class="text-danger pl-3">', '</small>'); ?>
                                    <br>
                                    <label for="idDosen">Nama Dosen Pengajar</label>
                                    <select name="idDosen" id="idDosen" class="form-control">
                                        <option value="">Pilih Dosen Pengajar</option>
                                        <?php foreach($dosen as $dsn) : ?>
                                            <option value="<?= $dsn['id_dsn']; ?>"><?= $dsn['nama_dosen']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('idDosen', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br>
                                        <label for="nomorRps">Nomor Rps</label>
                                        <input type="text" class="form-control" id="nomorRps" name="nomorRps">
                                        <?= form_error('nomorRps', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br>
                                        <label for="tglBerlaku">Tgl Berlaku</label>
                                        <input type="date" class="form-control" id="tglBerlaku" name="tglBerlaku">
                                        <?= form_error('tglBerlaku', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br>
                                        <label for="tglDisusun">Tgl Disusun</label>
                                        <input type="date" class="form-control" id="tglDisusun" name="tglDisusun">
                                        <?= form_error('tglDisusun', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br>
                                        <label for="revisi">Revisi</label>
                                        <input type="text" class="form-control" id="revisi" name="revisi">
                                        <?= form_error('revisi', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <br>
                                    </div>
                                    <div class="mb-3">
                                        <label for="identitas" class="form-label">Identitas</label>
                                        <textarea type="text" class="form-control" id="identitas" name="identitas">
                                            <div style="font-size:16px;font-family:Times New Roman,Times,serif" class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <table style="width: 100%; font-size:14px; border: 7px;" class="table table-bordered">
                                                            <tr>
                                                                <td>
                                                                    Program Studi
                                                                </td>
                                                                <td style="width: 20%">
                                                </td>
                                                <td>
                                                    Semester
                                                </td>
                                                <td colspan="5">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Nama & Kode Mata Kuliah
                                                </td>
                                                <td style="width: 20%">

                                                </td>
                                                <td>
                                                    Bobot SKS
                                                </td>
                                                <td colspan="5">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3">
                                                    Detail Prosentasi Penilaian
                                                </td>
                                                <td rowspan="3" style="width: 20%">
                                                    <!--  -->
                                                </td>
                                                <td>
                                                    Dosen Pengampu
                                                </td>
                                                <td colspan="5">
                                                    
                                                        <!--  -->
                                                        <br>
                                                        <!-- NIK:  -->
                                                        <br>
                                                        
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2">
                                                    Klasifikasi Nilai
                                                </td>
                                                <td style="text-align: center;">
                                                    >80
                                                </td>
                                                <td style="text-align: center;">
                                                    >60 & <80 </td>
                                                    <td style="text-align: center;">
                                                        >40 & <60 </td>
                                                <td style="text-align: center;">
                                                    >20 & <40 </td>
                                                <td style="text-align: center;">
                                                    < 20 </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align: center;">
                                                    A
                                                </td>
                                                <td style="text-align: center;">
                                                    B
                                                </td>
                                                <td style="text-align: center;">
                                                    C
                                                </td>
                                                <td style="text-align: center;">
                                                    D
                                                </td>
                                                <td style="text-align: center;">
                                                    E
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </textarea>
                        <?= form_error('identitas', '<small class="text-danger pl-3">', '</small>'); ?>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="gambaranUmum" class="form-label">Gambaran Umum</label>
                        <textarea type="text" class="form-control" id="gambaranUmum" name="gambaranUmum"> </textarea>
                        <?= form_error('gambaranUmum', '<small class="text-danger pl-3">', '</small>'); ?>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="capaianPem" class="form-label">Capaian Pembelajaran</label>
                        <textarea type="text" class="form-control" id="capaianPem" name="capaianPem"></textarea>
                        <?= form_error('capaianPem', '<small class="text-danger pl-3">', '</small>'); ?>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="prasyaratPeng" class="form-label">Prasyarat dan Pengetahuan</label>
                        <textarea type="text" class="form-control" id="prasyaratPeng" name="prasyaratPeng"></textarea>
                        <?= form_error('prasyaratPeng', '<small class="text-danger pl-3">', '</small>'); ?>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="unitPem" class="form-label">Unit Pembelajaran secara Spesifik</label>
                        <textarea type="text" class="form-control" id="unitPem" name="unitPem">
                            <div style="font-size:16px;font-family:Times New Roman,Times,serif" class="container">
                                <div class="row">
                                    <div class="col">
                                        <table style="width: 100%; font-size:14px; border: 7px;" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td>Kemampuan Akhir Yang Diharapkan</td>
                                                    <td>Indikator</td>
                                                    <td>Bahan Kajian</td>
                                                    <td>Metode Pembelajaran</td>
                                                    <td>Waktu</td>
                                                    <td>Metode Penilaian</td>
                                                    <td>Bahan Ajar</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </textarea>
                        <?= form_error('unitPem', '<small class="text-danger pl-3">', '</small>'); ?>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="detailPenilaian" class="form-label">Tugas/Aktivitas dan Penilaian</label>
                        <textarea type="text" class="form-control" id="tugasPen" name="tugasPen">
                            <table style="width: 100%; font-size:14px; border: 7px;" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Tugas/Aktivitas</td>
                                        <td>Kemampuan Akhir</td>
                                        <td>Waktu</td>
                                        <td>Bobot</td>
                                        <td>Kriteria</td>
                                        <td>Indikator</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </textarea>
                        <?= form_error('tugasPen', '<small class="text-danger pl-3">', '</small>'); ?>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="referensi" class="form-label">Referensi</label>
                        <textarea type="textarea" class="form-control" id="referensi" name="referensi"> </textarea>
                        <?= form_error('referensi', '<small class="text-danger pl-3">', '</small>'); ?>
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="rencanaPem" class="form-label">Rencana Pelaksanaan Pembelajaran</label>
                        <textarea type="text" class="form-control" id="rencanaPem" name="rencanaPem">
                            <table style="width: 100%; font-size:14px; border: 7px;" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>Minggu/Pertemuan</td>
                                        <td>Kemampuan Akhir yang Diharapkan</td>
                                        <td>Indikator</td>
                                        <td>Topik dan SubTopik</td>
                                        <td>Aktivitas dan Strategi Pembelajaran</td>
                                        <td>Waktu</td>
                                        <td>Penilaian</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </textarea>
                        <?= form_error('rencanaPem', '<small class="text-danger pl-3">', '</small>'); ?>
                        <br>
                    </div>
                    <a href="<?= base_url('Rps'); ?>" type="submit" class="btn btn-danger">
                    <i class="fa fa-solid fa-arrow-left"></i>    
                    Tidak Jadi</a>
                    <button type="submit" class="btn btn-primary">
                    <i class="fa fa-solid fa-plus"></i>    
                    Tambahkan</button>
                </form>
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