$(document).ready(function() {
    // ketika tombol update di klik
    $('.btn').click(function() {
      // ambil data dari elemen yang dibutuhkan
      var id = $(this).data('id');
      var kode_matkul = $(this).data('kode_matkul');
  
      // masukkan data ke elemen form update
      $('#updateId').val(id);
      $('#updateKodeMatkul').val(kode_matkul);

      $('#modalUpdate').modal('show');
    }
      )
    }
    )